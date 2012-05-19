Ext.define('SisInventarios.controller.Marcas', {
    extend: 'Ext.app.Controller',
    stores: [
    'Marcas'
    ],
    models: [
    'Marca'
    ],
    views: [
    'marca.List',
    'marca.Add',
    'marca.Selector'
    ],
    requires:[
        'Ext.window.MessageBox',
        'Ext.tip.*'
    ],
    init: function() {
        this.control({            
            'marcaslist button[action=addmarcas]': {
                click: this.addMarcas
            },
            'marcaslist button[action=editmarcas]': {
                click: this.editMarcas
            },
            'marcaslist #listamarcas': {
                itemdblclick: this.editMarcas
            },
            'marcaslist button[action=deletemarcas]': {
                click: this.deleteMarcas
            },
            'marcaslist button[action=infomarcas]': {
                click: this.deleteMarcas
            },
            'marcaslist button[action=statisticsmarcas]': {
                click: this.deleteMarcas
            },
            'marcaslist button[action=eventviewermarcas]': {
                click: this.deleteMarcas
            },
            'marcasadd button[action=save]': {
                click: this.saveMarcas
            }

        });
    },
    
    addMarcas: function(button){
        Ext.widget('marcasadd')
    },
    editMarcas: function(source, record) {
        if(source.getXType() == 'button'){
            var win = source.up('window');
            record = win.down('#listamarcas').getSelectionModel().getSelection();
            record = record[0];
        }
        var view = Ext.widget('marcasadd');
        view.down('form').loadRecord(record);
        
    //var view = Ext.widget('ftpuseredit');
       
    },
    
    deleteMarcas: function(button){
        Ext.MessageBox.confirm(
            'Eliminar Marca',
            'Esta seguro que desea eliminar las Marcas seleccionados',
            function(confirm){
                if(confirm == 'yes'){
                    var win = button.up('window');
                    var seleccion = win.down('#listamarcas').getSelectionModel().getSelection();
                    this.getMarcasStore().remove(seleccion);
                    this.getMarcasStore().sync();
                }
            },
            this
            );
    },
    saveMarcas: function(button){
        var win    = button.up('window');
        var form   = win.down('form');       
        if(form.getForm().isValid()){
            var record = form.getRecord();
            var values = form.getValues();
            if(!record){
                record = this.getMarcaModel().create();
                record.set(values);
                this.getMarcasStore().insert(0, record);
            }else{
                record.set(values);
            }
            win.close();
            this.getMarcasStore().sync();
        }
    }
});