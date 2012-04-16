Ext.define('SisInventarios.view.proveedor.List' ,{
    extend: 'Ext.window.Window',
    alias : 'widget.proveedoreslist',
    layout: 'fit',
    autoShow: true,
    modal:true,
    width: 720,
    height: 415,
    iconCls:'icon-provider-16x16',
    title: 'Lista de Proveedores',
    initComponent: function() {
        var sm = Ext.create('Ext.selection.CheckboxModel',{
            listeners:{
                'selectionchange': this.selectChange,
                scope: this
            }
        });

        this.items=[{
            id:'listaproveedores',
            xtype: 'grid',
            border: false,
            store: 'Proveedores',
            columns : [{
                header: 'Nombre',
                dataIndex: 'nombre_proveedor',
                renderer:function(value, metaData){
                    metaData.style = 'font-size:120%; font-weight: bold';
                    return value;
                },
                width:120
            },{
                header: 'Direccion',
                dataIndex: 'direccion_proveedor',
                renderer:function(value, metaData){
                    metaData.style = 'white-space:normal';
                    return value;
                },
                width: 330
            }, {
                header: 'Telefono',
                dataIndex: 'telefono',
                width: 80
            },{
                header: 'Email',
                dataIndex: 'email',
                renderer:function(value, metaData){
                    metaData.style = 'white-space:normal';
                    return value;
                },
                width: 150
            }],
            selModel: sm,
            bbar:Ext.create('Ext.PagingToolbar', {
                store: Ext.data.StoreManager.lookup('Proveedores'),
                displayInfo: true,
                displayMsg: 'Mostrando {0} - {1} proveedores de  {2}',
                emptyMsg: "No hay proveedores registrados"
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
                    action: 'addproveedor',
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
                    action: 'editproveedor',
                    disabled:true
                },{
                    text: 'Eliminar',
                    iconCls:'icon-delete-32x32',
                    action:'deleteproveedor',
                    disabled:true
                }]
            }]
        }];
        this.callParent(arguments);
    },
    selectChange: function( sm, selected, options ){
        var bedit = this.down('button[action=editproveedor]');
        var bdelete = this.down('button[action=deleteproveedor]');
        
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