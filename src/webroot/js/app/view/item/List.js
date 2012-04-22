Ext.define('SisInventarios.view.item.List' ,{
    extend: 'Ext.panel.Panel',
    alias : 'widget.itemlist',
    title : 'Items Que corresponden a la Compra seleccionada',    
    layout:'fit',
    initComponent: function() {    
        var sm = Ext.create('Ext.selection.CheckboxModel',{
            listeners:{
                'selectionchange': this.selectChange,
                scope: this
            }
        });
        this.listeners = {
            'destroy': function(window, options){
                Ext.data.StoreManager.lookup('Items').clearFilter();
            },
            'hide': function(window, options){
                Ext.data.StoreManager.lookup('Items').clearFilter();
            }
        }
        this.items=[{
                id:'listaitems',
                xtype:'grid',
                border:false,
                store:'Items',
                columns:[/*{
                        header:'Fecha de Item',
                        dataIndex:'fecha_item',
                        width:150,
                        renderer:Ext.util.Format.dateRenderer('Y/m/d')
                },{
                        header:'Proveedor',
                        dataIndex:'proveedor_id',                        
                        width:150,
                        renderer: function(value, metaData, record, rowIndex, colIndex, store){
                            var sp = Ext.data.StoreManager.lookup('Proveedores');
                            var index = sp.find('id', value);
                            if(index >= 0 ){
                                return sp.getAt(index).get('nombre_proveedor');
                            }
                           
                            return value;
                        }                        
                },{
                        header:'Credito',
                        dataIndex:'credito_id',
                        width:150
                },{
                        header:'Total de Item',
                        dataIndex:'monto_total',
                        width:150
                },{
                        header:'Empleado',
                        dataIndex:'empleado_id',
                        width:150,
                        renderer: function(value, metaData, record, rowIndex, colIndex, store){
                            var sp = Ext.data.StoreManager.lookup('Empleados');
                            var index = sp.find('id', value);
                            if(index >= 0 ){
                                return sp.getAt(index).get('nombres') + ' ' +sp.getAt(index).get('apellido_paterno') + ' ' + sp.getAt(index).get('apellido_materno');
                            }
                           
                            return value;
                        }   
                }*/],
            selModel:sm,
            bbar:Ext.create('Ext.PagingToolbar', {
                store: Ext.data.StoreManager.lookup('Items'),
                displayInfo: true,
                displayMsg: 'Mostrando {0} - {1} Items de  {2}',
                emptyMsg: "No hay Items registradas"
            })
        }];
    this.tbar=[{
            title:'Acciones',
            xtype:'buttongroup',
            columns:3,
            items:[{
                xtype:'buttongroup',
                items:{
                    scale: 'large',
                    text: 'Registrar',
                    action: 'additem',
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
                    action: 'edititem',
                    disabled:true
                },{
                    text: 'Eliminar',
                    iconCls:'icon-delete-32x32',
                    action:'deleteitem',
                    disabled:true
                }]
            }]
    }]
        this.callParent(arguments);
    } ,
    selectChange: function( sm, selected, options ){
        var bedit = this.down('button[action=edititem]');
        var bdelete = this.down('button[action=deleteitem]');
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