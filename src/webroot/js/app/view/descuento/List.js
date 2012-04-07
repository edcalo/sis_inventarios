Ext.define('SisInventarios.view.descuento.List' ,{
    extend: 'Ext.window.Window',
    alias : 'widget.descuentolist',
    layout: 'fit',
    autoShow: true,
    modal:true,
    width: 650,
    height: 415,
    title: 'Lista de Descuentos',
    initComponent: function() {
       // alert("aqui");        
        var sm = Ext.create('Ext.selection.CheckboxModel',{
            listeners:{
                'selectionchange': this.selectChange,
                scope: this
            }
        });

        this.items=[{
            id:'listadescuentos',
            xtype: 'grid',
            border: false,
            store: 'Descuentos',
            columns : [{
                header: 'Nombre Descuento',
                dataIndex: 'nombre_descuento',
                renderer:function(value, metaData){
                    metaData.style = 'font-size:120%; font-weight: bold';
                    return value;
                },
                width:120
            },{
                header: 'Fecha Inicio Descuento',
                dataIndex: 'fecha_inicio_descuento',
                renderer:function(value, metaData){
                    metaData.style = 'white-space:normal';
                    return value;
                },
                width: 380
            },
            {
                header: 'Fecha Fin Descuento',
                dataIndex: 'fecha_fin_descuento',
                renderer:function(value, metaData){
                    metaData.style = 'white-space:normal';
                    return value;
                },
                width: 380
            },
            {
                header: 'Cuota Inicial',
                dataIndex: 'cuota_inicial',
                renderer:function(value, metaData){
                    metaData.style = 'white-space:normal';
                    return value;
                },
                width: 380
            },
            {
                header: 'Tipo',
                dataIndex: 'tipo',
                renderer:function(value, metaData){
                    metaData.style = 'white-space:normal';
                    return value;
                },
                width: 380
            },
            {
                header: 'Descripción Descuento',
                dataIndex: 'descripcion_descuento',
                renderer:function(value, metaData){
                    metaData.style = 'white-space:normal';
                    return value;
                },
                width: 380
            }],
            selModel: sm,
            bbar:Ext.create('Ext.PagingToolbar', {
                store: Ext.data.StoreManager.lookup('Descuentos'),
                displayInfo: true,
                displayMsg: 'Mostrando {0} - {1} descuentos de  {2}',
                emptyMsg: "No hay descuentos registrados"
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
                    action: 'adddescuento',
                    iconAlign: 'top',
                    iconCls: 'icon-add-server'
                }
            },{
                xtype: 'buttongroup',
                defaults:{
                    scale: 'large',
                    iconAlign: 'top'
                },
                items:[{
                    text: 'Modificar',
                    iconCls: 'icon-edit-server',
                    action: 'editdescuento',
                    disabled:true
                },{
                    text: 'Eliminar',
                    iconCls:'icon-delete-server',
                    action:'deletedescuento',
                    disabled:true
                }]
            }]
        }];
        this.callParent(arguments);
    },
    selectChange: function( sm, selected, options ){
        var bedit = this.down('button[action=editdescuento]');
        var bdelete = this.down('button[action=deletedescuento]');
        
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