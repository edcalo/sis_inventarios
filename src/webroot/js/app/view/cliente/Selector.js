Ext.define('SisInventarios.view.cliente.Selector', {
    extend: 'Ext.form.FieldContainer',
    alias : 'widget.clienteselector',
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
            displayField:   'nit_ci',
            valueField:     'id',
            store:          'Clientes',
            name:           this.name,
            allowBlank:     this.allowBlank,
            listConfig:     {
                emptyText: 'No se han encontrado clientes.',
                getInnerTpl: function() {
                    return '<div class="search-item">' +
                    '<h3>({nit_ci}) {nombres} {apellido_paterno} {apellido_materno}</h3>' +
                    '<span style="font-size:11px; color:#333;"><b>Telefono:</b> {telefono}, <b>E-mail:</b> {email} </span>' +
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
        Ext.widget('clienteadd');
    }
});
