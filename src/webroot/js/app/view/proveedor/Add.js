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
                name : 'nombre_rol',
                fieldLabel: 'Nombre del Proveedor',
                msgTarget: 'side',
                allowBlank: false,
                anchor:'95%'
            },{
                anchor: '100%',
                xtype: 'textarea',                
                name : 'descripcion',
                fieldLabel: 'Descripcion',
                allowBlank: true,
                height: 100
            },{
                xtype: 'container',
                layout:'column',
                style:{paddingBottom: '20px'},
                items:[{
                    xtype: 'container',
                    columnWidth:.35,
                    layout: 'anchor',
                    items: [{
                        xtype: 'textfield',
                        name : 'groupname',
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
                        name : 'description',
                        fieldLabel: 'Correo electronico',
                        msgTarget: 'side',
                        allowBlank: false,
                        anchor:'100%'
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