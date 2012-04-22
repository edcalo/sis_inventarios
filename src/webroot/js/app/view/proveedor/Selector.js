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
            displayField:   'nombre_proveedor',
            valueField:     'id',
            store:          'Proveedores',
            name:           this.name,
            allowBlank:     this.allowBlank,
            listConfig:     {
                emptyText: 'No se han encontrado proveedores.',
                getInnerTpl: function() {
                    return '<div class="search-item">' +
                    '<h3>{nombre_proveedor}</h3>' +
                    '<span style="font-size:11px; color:#333;">'+
                    '<b>Telefono:</b> {telefono} <b>E-mail:</b> {email}'+
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
        Ext.widget('proveedoradd');
    }
});
