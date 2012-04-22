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
            displayField:   'nombre_industria',
            valueField:     'id',
            store:          'Industrias',
            name:           this.name,
            allowBlank:     this.allowBlank,
            listConfig:     {
                emptyText: 'No se han encontrado industrias.',
                getInnerTpl: function() {
                    return '<div class="search-item">' +
                    '<h3>{nombre_industria}</h3>' +
                    '<span style="font-size:11px; color:#333;">{descripcion_industria}</span>' +
                    '</div>';
                }
            }
        },{
            xtype:          'button',
            iconCls:        'icon-add-16x16',
            handler:        this.showFormAdd
        }]

        this.callParent(arguments);
    },
    showFormAdd: function(){
        Ext.widget('industriaadd');
    }
});
