Ext.define('SisInventarios.view.marca.Selector', {
    extend: 'Ext.form.FieldContainer',
    alias : 'widget.marcasselector',
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
            displayField:   'nombre_marca',
            valueField:     'id',
            store:          'Marcas'   
        },{
            xtype:          'button',
            iconCls:        'icon-add-16x16',
            handler:        this.showFormAdd
        }]

        this.callParent(arguments);
    },
    showFormAdd: function(){
        Ext.widget('marcasadd');
    },
    getValue: function(){},
    setValue: function (){}
});
