Ext.define('SisInventarios.view.proveedor.Add', {
    extend: 'Ext.window.Window',
    alias : 'widget.proveedoradd',
    title : 'Registrar Proveedor',
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
                        xtype: 'numberfield',                        
                        name : 'telefono',
                        fieldLabel: 'Telefono',
                        msgTarget: 'side',
                        allowBlank: false,
                        maxLength: 8,
                        minValue: 0,
                        hideTrigger: true,
                        keyNavEnabled: false,
                        mouseWheelEnabled: false,
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
                        vtype:'email',
                        anchor:'100%'
                    }]
                }]
            },{
                xtype:'fieldset',
                id:'contact',
                checkboxToggle:true,
                title: ' Marque esta casilla si desea ingresar informacion del persona de contacto',
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
                    name : 'contacto',
                    fieldLabel: 'Nombre del Contacto',
                    msgTarget: 'side',
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
                            xtype: 'numberfield',
                            name : 'telefono_contacto',
                            fieldLabel: 'Telefono del contacto',
                            msgTarget: 'side',
                            maxLength: 8,
                            minValue: 0,
                            hideTrigger: true,
                            keyNavEnabled: false,
                            mouseWheelEnabled: false,
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
                            vtype: 'email',
                            anchor:'100%'
                        }]
                    }]
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
    },
    showContact: function(show){
        this.down('#contact').checkboxCmp.setValue(show);

    }
});