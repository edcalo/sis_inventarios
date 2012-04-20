Ext.define('SisInventarios.controller.Industrias', {
    extend: 'Ext.app.Controller',
    stores: [
        'Industrias'
    ],
    models: [
        'Industria'
    ],
    views: [
        'industria.List',
        'industria.Add',
        'industria.Selector'
    ],
    requires:[
        'Ext.window.MessageBox',
        'Ext.tip.*'
    ],
    init: function() {
        
        this.control({
            'industrialist button[action=addindustria]': {
                click: this.addIndustria
            },
            'industrialist button[action=editindustria]': {
                click: this.editIndustria
            },
            'industrialist #listaindustria': {
                itemdblclick: this.editIndustria
            },
            'industrialist button[action=deleteindustria]': {
                click: this.deleteIndustria
            },
            'industrialist button[action=syncdata]': {
                //click: this.syncIndustria
            },
            'industrialist button[action=infoindustria]': {
                //click: this.infoIndustria
            },
            'industrialist button[action=statisticsindustria]': {
                //click: this.statisticIndustria
            },
            'industrialist button[action=eventviewerindustria]': {
                //click: this.viewIndustria
            },
            'industriaadd button[action=save]': {
                click: this.saveIndustria
            }
        });
    },
    addIndustria: function(button){
        Ext.widget('industriaadd');

    },
    editIndustria: function(source, record){
        if(source.getXType() == 'button'){
            var win = source.up('window');
            record = win.down('#listaindustria').getSelectionModel().getSelection();
            record = record[0];
        }
        var view = Ext.widget('industriaadd');
        view.down('form').loadRecord(record);

    },
    deleteIndustria: function(button){
        Ext.MessageBox.confirm(
            'Eliminar Industria',
            'Esta seguro que desea eliminar las industrias seleccionados',
            function(confirm){
                if(confirm == 'yes'){
                    var win = button.up('window');
                    var seleccion = win.down('#listaindustria').getSelectionModel().getSelection();
                    this.getIndustriasStore().remove(seleccion);
                    this.getIndustriasStore().sync();
                }
            },
            this
            );
    },
    
    saveIndustria: function(button){
        var win    = button.up('window');
        var form   = win.down('form');
        if(form.getForm().isValid()){
            var record = form.getRecord();
            var values = form.getValues();
            if(!record){
                record = this.getIndustriaModel().create();
                record.set(values);
                this.getIndustriasStore().insert(0, record);
            }else{
                record.set(values);
            }
        
            win.close();
            this.getIndustriasStore().sync();
        }
    }
});