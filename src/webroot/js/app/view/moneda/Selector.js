Ext.define('SisInventarios.view.moneda.Selector', {
    extend: 'Ext.form.FieldContainer',
    alias : 'widget.monedasselector',
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
            displayField:   'nombre_moneda',
            valueField:     'id',
            store:          'Monedas',
            name:           this.name,
            allowBlank:     this.allowBlank,
            listConfig:     {
                emptyText: 'No se han encontrado monedas.',
                getInnerTpl: function() {
                    return '<div class="search-item">' +
                    '<h3>{nombre_moneda}</h3>' +
                    '<span style="font-size:11px; color:#333;">{simbolo_moneda}</span>' +
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
        Ext.widget('monedasadd');
    }
});
