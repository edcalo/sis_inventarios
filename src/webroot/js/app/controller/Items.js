Ext.define('SisInventarios.controller.Items', {
    extend: 'Ext.app.Controller',
    stores: [
    'Items'
    ],
    models: [
    'Item'
    ],
    views: [
    'item.List',
    'item.Add'
    //'item.Selector'
    ],
    requires:[
    'Ext.window.MessageBox',
    'Ext.tip.*'
    ],
    init: function() {
        this.control({
            'itemlist button[action=additem]': {
                click: this.addItem
            },
            'itemlist button[action=edititem]': {
                click: this.editItem
            },
            'itemlist #listaitems': {
                itemdblclick: this.editItem
            },
            'itemlist button[action=deleteitem]': {
                click: this.deleteItem
            },
            'itemadd button[action=save]': {
                click: this.saveItem
            }
        });
    },
    addItem: function(button){
        Ext.widget('itemadd');

    },
    viewItem:function(a, b, c){
        console.log('Ver detalle del grupo');
    },
    editItem: function(source, record){
        if(source.getXType() == 'button'){
            var win = source.up('window');
            record = win.down('#listaitems').getSelectionModel().getSelection();
            record = record[0];
        }
        var view = Ext.widget('itemadd');
        view.down('form').loadRecord(record);

    },
    deleteItem: function(button){
        Ext.MessageBox.confirm(
            'Eliminar item',
            'Esta seguro que desea eliminar los items seleccionados',
            function(confirm){
                if(confirm == 'yes'){
                    var win = button.up('window');
                    var seleccion = win.down('#listaitems').getSelectionModel().getSelection();
                    this.getItemsStore().remove(seleccion);
                    this.getItemsStore().sync();
                }
            },
            this
            );
    },
    saveItem: function(button){
        var win    = button.up('window');
        var form   = win.down('form');
        var record = form.getRecord();
        var values = form.getValues();
        if(form.getForm().isValid()){
            if(!record){
                record = this.getItemModel().create();
                record.set(values);
                this.getItemsStore().insert(0, record);
            }else{
                record.set(values);
            }
        
            win.close();
            this.getItemsStore().sync();
        }
    }

});