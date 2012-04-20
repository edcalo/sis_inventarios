Ext.define('SisInventarios.view.proveedor.Selector', {
    extend: 'Ext.form.FieldContainer',
    alias : 'widget.proveedorselector',
    combineErrors: true,
    msgTarget: 'side',
    layout: 'hbox',
    defaults: {
        hideLabel: true
    },
    initComponent: function() {
        this.items=[{
            flex:           1,
            xtype:          'combo',
            mode:           'remote',
            triggerAction:  'all',
            forceSelection: true,
            editable:       true,
            name:           'rol',
            displayField:   'nombre_proveedor',
            valueField:     'id',
            store:          'Proveedores'   
        },{
            xtype:          'button',
            iconCls:        'icon-add-16x16',
            handler:        this.showFormAdd
        }]

        this.callParent(arguments);
    },
    showFormAdd: function(){
        Ext.widget('proveedoradd');
    },
    getValue: function(){},
    setValue: function (){}
});
