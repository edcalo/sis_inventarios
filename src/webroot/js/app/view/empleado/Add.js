Ext.define('SisInventarios.view.empleado.Add', {
    extend: 'Ext.window.Window',
    alias : 'widget.empleadoadd',
    title : 'Registrar servidor',
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
                name : 'nombres',
                fieldLabel: 'Nombres',
                msgTarget: 'side',
                allowBlank: false,
                anchor:'95%'
            },{
                xtype: 'textfield',
                name : 'apellido_paterno',
                fieldLabel: 'Apellido Paterno',
                msgTarget: 'side',
                allowBlank: false,
                anchor:'95%'
            },{
                xtype: 'textfield',
                name : 'apellido_materno',
                fieldLabel: 'Apellido Materno',
                msgTarget: 'side',
                allowBlank: false,
                anchor:'95%'
            },{
                xtype: 'textfield',
                name : 'tipo_doc_identidad',
                fieldLabel: 'Tipo Documento',
                msgTarget: 'side',
                allowBlank: false,
                anchor:'95%'
            },{
                xtype: 'textfield',
                name : 'doc_identidad',
                fieldLabel: 'Documento Identidad',
                msgTarget: 'side',
                allowBlank: false,
                anchor:'95%'
            },{
                xtype: 'textfield',
                name : 'telefono',
                fieldLabel: 'Telefono',
                msgTarget: 'side',
                allowBlank: false,
                anchor:'95%'
            },{
                xtype: 'textfield',                
                name : 'email',
                fieldLabel: 'email',
                allowBlank: true,
                anchor:'95%'
            },{
                xtype: 'textfield',                
                name : 'contacto',
                fieldLabel: 'Contacto',
                allowBlank: true,
                anchor:'95%'
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