Ext.define('SisInventarios.view.compra.Add', {
    extend: 'Ext.window.Window',
    alias : 'widget.compraadd',
    title : 'Registrar Compras',
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
                xtype: 'datefield',
                format:'d/m/Y',
                name : 'fecha_compra',
                fieldLabel: 'Fecha de Compra',
                value: new Date(),
                msgTarget: 'side',
                allowBlank: false,
                anchor:'50%'
            },{
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
                        xtype: 'proveedorselector',                
                        name : 'proveedor_id',
                        fieldLabel: 'Proveedor de Compra',
                        allowBlank: true,
                        height: 100
                    }]
                },{},{
                    xtype:'container',
                    columnWidth:.45,
                    layout:'anchor',
                    items:[{
                        xtype: 'empleadoselector',                
                        name : 'empleado_id',
                        fieldLabel: 'Empleado encargado',
                        allowBlank: true,
                        height: 100
                    }]
                }]
            },{
                xtype: 'numberfield',                        
                name : 'monto_total',
                fieldLabel: 'Monto Total de compra',
                msgTarget: 'side',
                allowBlank: false,
                allowDecimals:false,
                maxLength: 8,
                minValue: 0,
                hideTrigger: true,
                keyNavEnabled: false,
                mouseWheelEnabled: false,
                anchor:'95%'
            },{
                xtype:'fieldset',
                id:'creditocompra',
                checkboxToggle:true,
                title: ' Marque esta casilla si la compra es a credito',
                defaultType: 'textfield',
                collapsed: true,
                layout: 'anchor',
                style:{
                    paddingTop: '20px'
                },
                defaults: {
                    anchor: '100%'
                },
                items :[{
                    xtype: 'textfield',
                    name : 'credito_id',
                    fieldLabel: 'Compra a credito',
                    msgTarget: 'side',
                    anchor:'95%'
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