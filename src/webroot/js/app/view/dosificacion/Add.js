Ext.define('SisInventarios.view.dosificacion.Add', {
    extend: 'Ext.window.Window',
    alias : 'widget.dosificacionadd',
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
                name : 'codigo_dosificacion',
                fieldLabel: 'Codigo Dosificacion',
                msgTarget: 'side',
                allowBlank: false,
                anchor:'95%'
            },{
                xtype: 'textfield',
                name : 'fecha_inicio_emicion',
                fieldLabel: 'Fecha Inicio Emision',
                msgTarget: 'side',
                allowBlank: false,
                anchor:'95%'
            },{
                xtype: 'textfield',
                name : 'fecha_limite_emision',
                fieldLabel: 'Fecha Limite Emision',
                msgTarget: 'side',
                allowBlank: false,
                anchor:'95%'
            },{
                xtype: 'textfield',
                name : 'numero_de_autorizacion',
                fieldLabel: 'Numero de Autorizacion',
                msgTarget: 'side',
                allowBlank: false,
                anchor:'95%'
            },{
                xtype: 'textfield',
                name : 'numero_de_factura',
                fieldLabel: 'Numero de Factura',
                msgTarget: 'side',
                allowBlank: false,
                anchor:'95%'
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