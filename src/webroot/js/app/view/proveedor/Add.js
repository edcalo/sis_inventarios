Ext.define('SisInventarios.view.proveedor.Add', {
    extend: 'Ext.window.Window',
    alias : 'widget.proveedoradd',
    title : 'Registrar Proveedor',
    layout: 'fit',
    autoShow: true,
    modal:true,
    width: 550,
    iconCls: 'icon-add',
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
                xtype: 'textfield',
                name : 'nombre_proveedor',
                fieldLabel: 'Nombre del Proveedor',
                msgTarget: 'side',
                allowBlank: false,
                anchor:'95%'
            },{
                anchor: '100%',
                xtype: 'textarea',                
                name : 'direccion_proveedor',
                fieldLabel: 'Direccion del proveedor',
                allowBlank: true,
                height: 100
            },{
                xtype: 'container',
                layout:'column',
                style:{
                    paddingBottom: '20px'
                },
                items:[{
                    xtype: 'container',
                    columnWidth:.35,
                    layout: 'anchor',
                    items: [{
                        xtype: 'textfield',
                        name : 'telefono',
                        fieldLabel: 'Telefono',
                        msgTarget: 'side',
                        allowBlank: false,
                        anchor:'95%'
                    }]
                },{
                    xtype: 'container',
                    columnWidth:.65,
                    layout: 'anchor',
                    items: [{
                        xtype: 'textfield',
                        name : 'email',
                        fieldLabel: 'Correo electronico',
                        msgTarget: 'side',
                        allowBlank: false,
                        anchor:'100%'
                    }]
                }]
            },{
                xtype:'fieldset',
                id:'contacto',
                checkboxToggle:true,
                title: 'Informacion del contacto',
                defaultType: 'textfield',
                collapsed: true,
                layout: 'anchor',
                defaults: {
                    anchor: '100%'
                },
                items :[{
                    xtype: 'textfield',
                    name : 'contacto',
                    fieldLabel: 'Nombre del Contacto',
                    msgTarget: 'side',
                    allowBlank: false,
                    anchor:'95%'
                },{
                    xtype: 'container',
                    layout:'column',
                    style:{
                        paddingBottom: '20px'
                    },
                    items:[{
                        xtype: 'container',
                        columnWidth:.35,
                        layout: 'anchor',
                        items: [{
                            xtype: 'textfield',
                            name : 'telefono_contacto',
                            fieldLabel: 'Telefono del contacto',
                            msgTarget: 'side',
                            allowBlank: false,
                            anchor:'95%'
                        }]
                    },{
                        xtype: 'container',
                        columnWidth:.65,
                        layout: 'anchor',
                        items: [{
                            xtype: 'textfield',
                            name : 'email_contacto',
                            fieldLabel: 'Correo electronico del contacto',
                            msgTarget: 'side',
                            allowBlank: false,
                            anchor:'100%'
                        }]
                    }]
                }]
            }]
        }];

        this.buttons = [{
            text: 'Save',
            action: 'save',
            iconCls:'icon-guardar'
        },{
            text: 'Cancel',
            scope: this,
            handler: this.close,
            iconCls:'icon-cancelar'
        }];

        this.callParent(arguments);
    }
});