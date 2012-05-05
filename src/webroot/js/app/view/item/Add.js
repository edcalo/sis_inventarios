Ext.define('SisInventarios.view.item.Add', {
    extend: 'Ext.window.Window',
    alias : 'widget.itemadd',
    title : 'Registrar items',
    layout: 'fit',
    autoShow: true,
    modal:true,
    width: 550,
    iconCls: 'icon-add-16x16',
    initComponent: function() {
        this.items = [{
            xtype: 'form',
            border:false,
            bodyStyle: 'padding:10px; background-color:#DFE9F6',
            fieldDefaults: {
                labelAlign: 'top'
            },
            items: [{
                name:'id',
                xtype: 'hidden'
            },{
                xtype:'fieldset',
                title:'Dpendencia para Item',
                layout:'anchor',
                style:{
                    paddingTop:'20px'
                },
                defaults:{
                    anchor:'100%'
                },
                items:[{
                    xtype:'container',
                    layout:'column',
                    style:{
                        paddingBottom:'20px'
                    },
                    items:[{
                        xtype:'container',
                        columnWidth:.45,
                        layout:'anchor',
                        items:[{
                            xtype: 'gruposelector',
                            name : 'nombre_grupo',
                            fieldLabel: 'Grupo Item',
                            allowBlank: false
                        }]
                    },{
                        xtype:'container',
                        columnWidth:.45,
                        layout:'anchor',
                        items:[{
                            xtype: 'industriaselector',                
                            name : 'industria_id',
                            fieldLabel: 'Industria',
                            allowBlank: false,
                            height: 50
                        }]
                    },{
                        xtype:'container',
                        columnWidth:.45,
                        layout:'anchor',
                        items:[{
                            xtype: 'almacenselector',                
                            name : 'almacen_id',
                            fieldLabel: 'Almacen',
                            allowBlank: false,
                            height: 50
                        }]
                    },{
                        xtype:'container',
                        columnWidth:.45,
                        layout:'anchor',
                        items:[{
                            xtype: 'marcasselector',                
                            name : 'marca_id',
                            fieldLabel: 'Marca',
                            allowBlank: false,
                            height: 50
                        }]
                    },{
                        xtype:'container',
                        columnWidth:.45,
                        layout:'anchor',
                        items:[{
                            xtype: 'compraselector',                
                            name : 'compra_id',
                            fieldLabel: 'Compra',
                            allowBlank: false,
                            height: 50
                        }]
                    }]
                }]
            },{
                xtype:'fieldset',
                title:'Datos del item',
                defaulType:'textfield',
                layout:'anchor',
                style:{
                    paddingTop:'20px'
                },
                defaults:{
                    anchor:'100%'
                },
                items:[{
                    xtype:'container',
                    layout:'column',
                    style:{
                        paddingBottom: '20px'
                    },
                    items:[{
                        xtype:'container',
                        columnWidth:.33,
                        layout: 'anchor',
                        items:[{
                            xtype:'textfield',
                            name:'nombre_articulo',
                            fieldLabel:'Nombre del Item',
                            allowBlank: false,
                            msgTarget:'side',
                            anchor:'90%'
                        }]
                    },{
                        xtype:'container',
                        columnWidth:.33,
                        layout: 'anchor',
                        items:[{
                            xtype:'textfield',
                            name:'numero_de_serie',
                            fieldLabel:'Numero de Serie',
                            allowBlank: false,
                            msgTarget:'side',
                            anchor:'90%'  
                        }]
                    },{
                        xtype:'container',
                        columnWidth:.33,
                        layout: 'anchor',
                        items:[{
                            xtype:'textfield',
                            name:'codigo',
                            fieldLabel:'Codigo del Item',
                            allowBlank: false,
                            msgTarget:'side',
                            anchor:'90%'  
                        }]
                    }]
                },{
                    xtype:'container',
                    layout:'column',
                    style:{
                        paddingBottom: '20px'
                    },
                    items:[{
                        xtype:'container',
                        columnWidth:.33,
                        layout: 'anchor',
                        items:[{
                            xtype:'numberfield',
                            name:'precio_compra',
                            fieldLabel:'Precio de compra',
                            msgTarget:'side',
                            allowBlank: false,
                            allowDecimals:true,
                            maxLength: 8,
                            minValue: 0,
                            hideTrigger: true,
                            keyNavEnabled: false,
                            mouseWheelEnabled: false,
                            anchor:'90%'
                        }]
                    },{
                        xtype:'container',
                        columnWidth:.33,
                        layout: 'anchor',
                        items:[{
                            xtype:'numberfield',
                            name:'precio_referencia_venta',
                            fieldLabel:'Precio de Referencia  venta',
                            msgTarget:'side',
                            allowBlank: false,
                            allowDecimals:true,
                            maxLength: 8,
                            minValue: 0,
                            hideTrigger: true,
                            keyNavEnabled: false,
                            mouseWheelEnabled: false,
                            anchor:'90%'
                        }]
                    },{
                        xtype:'container',
                        columnWidth:.33,
                        layout: 'anchor',
                        items:[{
                            xtype: 'numberfield',                        
                            name : 'garantia_compra',
                            fieldLabel: 'Garantia del item',
                            msgTarget: 'side',
                            allowBlank: false,
                            allowDecimals:false,
                            maxLength: 8,
                            minValue: 0,
                            hideTrigger: true,
                            keyNavEnabled: false,
                            mouseWheelEnabled: false,
                            anchor:'95%'
                        }]
                    }]
                },{
                    xtype:'textarea',
                    name:'descripcion',
                    fieldLabel:'Descripcion del Item',
                    msgTarget:'side',
                    anchor:'90%'
                }]
            }]
        }];

        this.buttons = [{
            text: 'Save',
            action: 'save',
            iconCls:'icon-save-16x16'
        },{
            text: 'Cancel',
            scope: this,
            handler: this.close,
            iconCls:'icon-cancel-16x16'
        }];

        this.callParent(arguments);
    }
});