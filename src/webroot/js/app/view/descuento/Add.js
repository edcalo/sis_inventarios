Ext.define('SisInventarios.view.descuento.Add', {
    extend: 'Ext.window.Window',
    alias : 'widget.descuentoadd',
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
                name : 'nombre_descuento',
                fieldLabel: 'Nombre Descuento',
                msgTarget: 'side',
                allowBlank: false,
                anchor:'95%'
            },{
                xtype: 'datefield',
                name : 'fecha_inicio_descuento',
                fieldLabel: 'Fecha Inicio Descuento',
                msgTarget: 'side',
                allowBlank: false,
                anchor:'95%'
            },{
                xtype: 'textfield',
                name : 'fecha_fin_descuento',
                fieldLabel: 'Fecha Fin Descuento',
                msgTarget: 'side',
                allowBlank: false,
                anchor:'95%'
            },{
                xtype: 'textfield',
                name : 'cuota_inicial',
                fieldLabel: 'Cuota Inicial',
                msgTarget: 'side',
                allowBlank: false,
                anchor:'95%'
            },{
                xtype: 'textfield',
                name : 'tipo',
                fieldLabel: 'Tipo',
                msgTarget: 'side',
                allowBlank: false,
                anchor:'95%'
            },{
                xtype: 'textfield',
                name : 'descripcion_descuento',
                fieldLabel: 'Descripción Descuento',
                msgTarget: 'side',
                allowBlank: false,
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