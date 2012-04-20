Ext.define('SisInventarios.view.industria.Selector', {
    extend: 'Ext.form.FieldContainer',
    alias : 'widget.industriaselector',
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
            displayField:   'nombre_industria',
            valueField:     'id',
            store:          'Industrias'   
        },{
            xtype:          'button',
            iconCls:        'icon-add-16x16',
            handler:        this.showFormAdd
        }]

        this.callParent(arguments);
    },
    showFormAdd: function(){
        Ext.widget('industriaadd');
    },
    getValue: function(){},
    setValue: function (){}
});
