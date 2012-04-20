Ext.define('SisInventarios.view.compra.List' ,{
    extend: 'Ext.panel.Panel',
    alias : 'widget.compralist',
    title : 'Compras Registradas',    
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
                Ext.data.StoreManager.lookup('Compras').clearFilter();
            },
            'hide': function(window, options){
                Ext.data.StoreManager.lookup('Compras').clearFilter();
            }
        }
        this.items=[{
                //id:'listacompras',
                xtype:'grid',
                border:false,
                store:'Compras',
                columns:[{
                        header:'Fecha de Compra',
                        dataIndex:'fecha_compra',
                        width:150                        
                },{
                        header:'Proveedor',
                        dataIndex:'proveedor_id',                        
                        width:150
                        /*editor:{
                            xtype:'proveedorselector'
                        }*/
                },{
                        header:'Credito',
                        dataIndex:'credito_id',
                        width:150
                },{
                        header:'Total de Compra',
                        dataIndex:'monto_total',
                        width:150
                },{
                        header:'Empleado',
                        dataIndex:'empleado_id',
                        width:150
                }],
            selModel:sm,
            bbar:Ext.create('Ext.PagingToolbar', {
                store: Ext.data.StoreManager.lookup('Compras'),
                displayInfo: true,
                displayMsg: 'Mostrando {0} - {1} Compras de  {2}',
                emptyMsg: "No hay compras registradas"
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
                    action: 'addcompra',
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
                    action: 'editcompra',
                    disabled:true
                },{
                    text: 'Eliminar',
                    iconCls:'icon-delete-32x32',
                    action:'deletecompra',
                    disabled:true
                }]
            }]
    }]
        this.callParent(arguments);
    } ,
    selectChange: function( sm, selected, options ){
        var bedit = this.down('button[action=editcompra]');
        var bdelete = this.down('button[action=deletecompra]');
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