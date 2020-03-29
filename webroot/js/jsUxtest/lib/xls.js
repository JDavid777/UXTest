$(function() {
    oFileIn = document.getElementById('my_file_input');
    if (oFileIn.addEventListener) {
      oFileIn.addEventListener('change', filePicked, false);
    }
  });
  function filePicked(oEvent) {

    var oFile = oEvent.target.files[0];
    var sFilename = oFile.name;

    var reader = new FileReader();
  

    reader.onload = function(e) {
      var data = e.target.result;
      XLS
      var cfb = XLS.CFB.read(data, {
        type: 'binary'
      });
      var wb = XLS.parse_xlscfb(cfb);

      wb.SheetNames.forEach(function(sheetName) {

        var sCSV = XLS.utils.make_csv(wb.Sheets[sheetName]);
        var data = XLS.utils.sheet_to_json(wb.Sheets[sheetName], {
          header: 1
        });
        var txt=" ";
        var contador=0;
        $.each(data, function(indexR, valueR) {
          
          $.each(data[indexR], function(indexC, valueC) {
            contador=contador+1;
            if(contador===1){
              txt=valueC
            }else{
              txt=valueC+", "+txt;
            }
          });
        });

        $("#inputxls").val(txt);
      });
    };
  
      
  // Llamar al JS Para empezar a leer el archivo .. Se podría retrasar esto si se desea
     reader.readAsBinaryString(oFile);
  }