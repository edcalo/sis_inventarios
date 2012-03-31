Ext.define('SisInventarios.view.cliente.Add', {
    extend: 'Ext.window.Window',
    alias : 'widget.clienteadd',
    title : 'Registrar Cliente',
    layout: 'fit',
    autoShow: true,
    modal:true,
    width: 400,
    
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
                xtype:'container',
                layout: 'column',
                style:{
                    paddingBottom:'20px'
                },
                items:[{
                    xtype:'container',
                    columnWidth:.35,
                    layout:'anchor',
                    items:[{
                        xtype:'textfield',
                        name:'nit_ci',
                        fieldLabel:'NIT o CI',
                        msgTarget:'side',
                        allowBlank:false,
                        vtype:'alphanum',
                        anchor:'90%'
                    }]
                },{
                    xtype:'container',
                    columnWidth:.55,
                    layout:'anchor',
                    items:[{
                        xtype:'textfield',
                        name:'nombres',
                        fieldLabel:'Nombres',
                        msgTarget:'side',
                        allowBlank:false,
                        vtype:'alpha',
                        anchor:'90%'
                    }]
                }]                
            },{
                xtype:'container',
                layout: 'column',
                style:{
                    paddingBottom:'20px'
                },
                items:[{
                    xtype:'container',
                    columnWidth:.50,
                    layout:'anchor',
                    items:[{
                        xtype:'textfield',
                        name:'apellido_paterno',
                        fieldLabel:'Apellido Paterno',
                        msgTarget:'side',
                        allowBlank:false,
                        vtype:'alpha',
                        anchor:'95%'
                    }]
                },{
                    xtype:'container',
                    columnWidth:.50,
                    layout:'anchor',
                    items:[{
                        xtype:'textfield',
                        name:'apellido_materno',
                        fieldLabel:'Apellido Materno',
                        msgTarget: 'side',
                        allowBlank: true,
                        vtype:'alpha',
                        anchor:'95%'
                    }]
                }]
            },{
                xtype:'container',
                layout: 'column',
                style:{
                    paddingBottom:'20px'
                },
                items:[{
                    xtype:'container',
                    columnWidth:.30,
                    layout:'anchor',
                    items:[{
                        xtype:'numberfield',
                        name:'telefono',
                        fieldLabel:'Telefono',
                        msgTarget:'side',
                        allowBlank: false,
                        allowDecimals:false,
                        //vtype:'alphanum',
                        minValue:0, //para evitar numeros negativos
                        hideTrigger: true,
                        keyNavEnabled: false,
                        mouseWheelEnabled: false,
                        anchor:'95%'
                    }]
                },{
                    xtype:'container',
                    columnWidth:.50,
                    layout:'anchor',
                    items:[{
                        xtype:'textfield',
                        name:'email',
                        fieldLabel:'Email',
                        msgTarget:'side',
                        allowBlank: false,
                        vtype: 'email',
                        anchor:'95%'
                    }]
                }]
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