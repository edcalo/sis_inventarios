Ext.define('SisInventarios.view.dosificacion.List' ,{
    extend: 'Ext.window.Window',
    alias : 'widget.dosificacionlist',
    layout: 'fit',
    autoShow: true,
    modal:true,
    width: 650,
    height: 415,
    iconCls:'icon-ii-16x16',
    title: 'Lista de Dosificacion',
    initComponent: function() {
       // alert("aqui");        
        var sm = Ext.create('Ext.selection.CheckboxModel',{
            listeners:{
                'selectionchange': this.selectChange,
                scope: this
            }
        });

        this.items=[{
            id:'listadosificaciones',
            xtype: 'grid',
            border: false,
            store: 'Dosificaciones',
            columns : [{
                header: 'Codigo Dosificacion',
                dataIndex: 'codigo_dosificacion',
                renderer:function(value, metaData){
                    metaData.style = 'font-size:120%; font-weight: bold';
                    return value;
                },
                width:120
            },{
                header: 'Fecha inicio Emision',
                dataIndex: 'fecha_inicio_emicion',
                width: 120
            },
            {
                header: 'Fecha limite Emision',
                dataIndex: 'fecha_limite_emision',
                width: 120
            },
            {
                header: 'Numero de Autorizacion',
                dataIndex: 'numero_de_autorizacion',                
                width: 120
            },
            {
                header: 'Numero Actual de Factura',
                dataIndex: 'numero_de_factura',
                width: 120
            }],
            selModel: sm,
            bbar:Ext.create('Ext.PagingToolbar', {
                store: Ext.data.StoreManager.lookup('Dosificaciones'),
                displayInfo: true,
                displayMsg: 'Mostrando {0} - {1} dosificaiones de  {2}',
                emptyMsg: "No hay dosificaciones registrados"
            })
        }];
        
        this.tbar =[{
            title: 'Acciones',
            xtype: 'buttongroup',
            columns: 3,
            items:[{
                xtype: 'buttongroup',
                items:{
                    scale: 'large',
                    text: 'Registrar',
                    action: 'adddosificacion',
                    iconCls: 'icon-add-32x32'
                }
            },{
                xtype: 'buttongroup',
                defaults:{
                    scale: 'large'
                },
                items:[{
                    text: 'Modificar',
                    iconCls: 'icon-edit-32x32',
                    action: 'editdosificacion',
                    disabled:true
                },{
                    text: 'Eliminar',
                    iconCls:'icon-delete-32x32',
                    action:'deletedosificacion',
                    disabled:true
                }]
            }]
        }];
        this.callParent(arguments);
    },
    selectChange: function( sm, selected, options ){
        var bedit = this.down('button[action=editdosificacion]');
        var bdelete = this.down('button[action=deletedosificacion]');
        
        if(selected.length > 0){
            bdelete.enable();
            if(selected.length == 1){
                bedit.enable();
            }else{
                bedit.disable();
            }
        }else{
            bedit.disable();
            bdelete.disable();
        }
    }

});