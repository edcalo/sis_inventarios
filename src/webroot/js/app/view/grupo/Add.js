Ext.define('SisInventarios.view.grupo.Add', {
    extend: 'Ext.window.Window',
    alias : 'widget.gruposadd',
    title : 'Registrar Grupo',
    layout: 'fit',
    autoShow: true,
    modal:true,
    width: 550,
    iconCls: 'icon-add',
    initComponent: function() {
        this.items = [{
            xtype: 'form',
            border:false,
            bodyStyle: 'padding:10px; background-color:#DFE9F6',
            fieldDefaults: {
                labelAlign: 'top'
            },
            items: [{
                name:'id',
                xtype: 'hidden'
            },{
                name:'padre_id',
                xtype: 'hidden'
            },{
                xtype: 'container',
                layout:'column',
                style:{paddingBottom: '20px'},
                items:[{
                    xtype: 'container',
                    columnWidth:.35,
                    layout: 'anchor',
                    items: [{
                        xtype: 'textfield',
                        name : 'codigo',
                        fieldLabel: 'Codigo',
                        msgTarget: 'side',
                        allowBlank: false,
                        anchor:'95%'
                    }]
                },{
                    xtype: 'container',
                    columnWidth:.65,
                    layout: 'anchor',
                    items: [{
                        xtype: 'textfield',
                        name : 'nombre_grupo',
                        fieldLabel: 'Nombre del grupo',
                        msgTarget: 'side',
                        allowBlank: false,
                        anchor:'100%'
                    }]
                }]
            },{
                anchor: '100%',
                xtype: 'htmleditor',                
                name : 'descripcion_grupo',
                fieldLabel: 'Descripcion',
                allowBlank: true,
                height: 200
            }]
        }];

        this.buttons = [{
            text: 'Save',
            action: 'save',
            iconCls:'icon-guardar'
        },{
            text: 'Cancel',
            scope: this,
            handler: this.close,
            iconCls:'icon-cancelar'
        }];

        this.callParent(arguments);
    }
});