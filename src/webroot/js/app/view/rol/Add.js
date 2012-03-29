Ext.define('SisInventarios.view.rol.Add', {
    extend: 'Ext.window.Window',
    alias : 'widget.roladd',
    title : 'Registrar servidor',
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
                fieldLabel: 'Nombre del Rol',
                msgTarget: 'side',
                allowBlank: false,
                anchor:'95%'
            },{
                anchor: '100%',
                xtype: 'htmleditor',                
                name : 'descripcion',
                fieldLabel: 'Desvripcion',
                allowBlank: true,
                height: 200
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