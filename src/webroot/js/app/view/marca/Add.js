Ext.define('SisInventarios.view.marca.Add', {
    extend: 'Ext.window.Window',
    alias : 'widget.marcasadd',
    title : 'Registrar Marca',
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
                xtype:'textfield',
                name:'nombre_marca',
                fieldLabel:'Nombre de Marca',
                msgTarget:'side',
                allowBlank:false,
                anchor:'95%'
            },{
                xtype:'htmleditor',
                name:'descripcion_marca',
                fieldLabel:'Descripcion de Marca',
                allowBlank: true,
                height:200,
                anchor:'100%'
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