Ext.define('SisInventarios.controller.Roles', {
    extend: 'Ext.app.Controller',
    stores: [
    'Roles'
    ],
    models: [
    'Rol'
    ],
    views: [
    'rol.List',
    'rol.Add'
    ],
    requires:[
    'Ext.window.MessageBox',
    'Ext.tip.*'
    ],
    init: function() {
        this.control({
            'listaroles button[action=addserver]': {
                click: this.addRol
            },
            'listaroles button[action=editserver]': {
                click: this.editRol
            },
            'listaroles #listagrupos': {
                itemdblclick: this.editRol
            },
            'listaroles button[action=deleteserver]': {
                click: this.deleteRol
            },
            'listaroles button[action=infoserver]': {
                click: this.deleteFtpGroup
            },
            'listaroles button[action=statisticsserver]': {
                click: this.deleteFtpGroup
            },
            'listaroles button[action=eventviewerserver]': {
                click: this.deleteFtpGroup
            },
            'listaroles button[action=save]': {
                click: this.saveRol
            }
        });
    },
    addRol: function(button){
        Ext.widget('ftpgroupadd');

    },
    viewRol:function(a, b, c){
        console.log('Ver detalle del grupo');
    },
    editRol: function(source, record){
        if(source.getXType() == 'button'){
            var win = source.up('window');
            record = win.down('#listagrupos').getSelectionModel().getSelection();
            record = record[0];
        }
        var view = Ext.widget('ftpgroupadd');
        view.down('form').loadRecord(record);

    },
    deleteRol: function(button){
        Ext.MessageBox.confirm(
            'Eliminar Servidores',
            'Esta seguro que desea eliminar los sercvidores seleccionados',
            function(confirm){
                if(confirm == 'yes'){
                    var win = button.up('window');
                    var seleccion = win.down('#listagrupos').getSelectionModel().getSelection();
                    this.getFtpGroupsStore().remove(seleccion);
                    this.getFtpGroupsStore().sync();
                }
            },
            this
        );
    },
    saveRol: function(button){
        var win    = button.up('window');
        var form   = win.down('form');
        var record = form.getRecord();
        var values = form.getValues();
        if(!record){
            record = this.getFtpGroupModel().create();
            record.set(values);
            this.getFtpGroupsStore().insert(0, record);
        }else{
            record.set(values);
        }
        
        win.close();
        this.getFtpGroupsStore().sync();


    }

});