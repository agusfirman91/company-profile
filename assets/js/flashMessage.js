const flashData =  $('.flash-data').data('flashdata');
if(flashData){
    Swall.fire({
        title : 'Data Berhasil ',
        text : 'Behasil '+flashData
    })
}