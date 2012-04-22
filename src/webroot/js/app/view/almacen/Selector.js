Ext.define('SisInventarios.view.almacen.Selector', {
    extend: 'Ext.form.FieldContainer',
    alias : 'widget.almacenselector',
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
            displayField:   'nombre_almacen',
            valueField:     'id',
            store:          'Almacenes',
            name:           this.name,
            allowBlank:     this.allowBlank,
            listConfig:     {
                emptyText: 'No se han encontrado almacenes.',
                getInnerTpl: function() {
                    return '<div class="search-item">' +
                    '<h3>{nombre_almacen}</h3>' +
                    '<span style="font-size:11px; color:#333;">Direccion : {direccion_almacen}</span>' +
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
        Ext.widget('almacenadd');
    }
});
