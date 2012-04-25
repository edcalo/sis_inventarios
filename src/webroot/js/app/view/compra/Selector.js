Ext.define('SisInventarios.view.compra.Selector', {
    extend: 'Ext.form.FieldContainer',
    alias : 'widget.compraselector',
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
            displayField:   'fecha_compra',
            valueField:     'id',
            store:          'Compras',
            name:           this.name,
            allowBlank:     this.allowBlank,
            listConfig:     {
                emptyText: 'No se han encontrado compras.',
                getInnerTpl: function() {
                    return '<div class="search-item">' +
                    '<h3>({fecha_compra})</h3>' +
                    '<span style="font-size:11px; color:#333;">'+
                    '<b>Monto Total:</b> {monto_total}'+
                    '</span>' +
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
        Ext.widget('compraadd');
    }
});
