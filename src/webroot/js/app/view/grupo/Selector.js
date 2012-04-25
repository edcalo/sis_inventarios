Ext.define('SisInventarios.view.grupo.Selector', {
    extend: 'Ext.form.FieldContainer',
    alias : 'widget.gruposelector',
    requires:["Ext.ux.TreeCombo"],
    combineErrors: true,
    msgTarget: 'side',
    layout: 'hbox',
    defaults: {
        hideLabel: true
    },
    initComponent: function() {
        this.items=[{
            flex:           1,
            xtype:          'treecombo',
            store:Ext.create('Ext.data.TreeStore', {
                proxy: {
                    type: 'ajax',
                    url: 'admin/grupos/tree',
                    method:'POST'
                },
                root: {
                    text: 'Grupos',
                    id: 1,
                    expanded: true
                },
                folderSort: true,            
                sorters: [{
                    property: 'text',
                    direction: 'ASC'
                }]
            }),
            name:           this.name,
            allowBlank:     this.allowBlank
        },{
            xtype:          'button',
            iconCls:        'icon-add-16x16',
            handler:        this.showFormAdd
        }]

        this.callParent(arguments);
    },
    showFormAdd: function(){
        Ext.widget('gruposadd');
    }
});
