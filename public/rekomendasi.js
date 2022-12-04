class Jamu {
    constructor( jamu_ ,year) {
      this.jamu_ = jamu_;
      this.year = year;
    }

    namaJamu_() {
        if( this.jamu_ == 'keseleo dan kurang nafsu makan'){
            return "Beras Kencur"
         } else if ( this.jamu_== 'pegal-pegal') {
            return "Kunyit Asam" 
         }else if ( this.jamu_ == 'keluhan darah tinggi dan gula darah') {
            return "Brotowali" 
         }else if ( this.jamu_ == 'kram perut dan masuk angin') {
            return "Temulawak" 
         }
         ;
    }

    age() {
      let date = new Date();
      let umur = date.getFullYear() - this.year;
      return umur;
    }
  }

class checkSaran extends Jamu {
//   constructor(jamu_, year) {
//     super(jamu_);
//     super(year);

//    }

   konsumsi(){
      
      if( this.age() <= 10 ){
          return "Dikonsumsi 1x"
       } else {
         return "Dikonsumsi 2x"
       }
     }

   penggunaan(){
    if( this.jamu_=='keseleo dan kurang nafsu makan' ){
        return "Dioleskan"
     } else {
        return "Dikonsumsi" 
     }

   }

}

function hasil (){
    //saran
    let saran = new checkSaran (document.getElementById('keluhan').value, document.getElementById('lahir').value);
    document.getElementById('saran').value = saran.konsumsi() + " dan " + saran.penggunaan();
   
    //nama jamu dan umur
    document.getElementById('nama_jamu').value = saran.namaJamu_();
    document.getElementById('umur').value = saran.age();
    
    //namakeluhan
    let namakeluhan = document.getElementById("keluhan").value ;
    document.getElementById('hasilkeluhan').value=namakeluhan

}

function hapus (){
    document.getElementById('hasilkeluhan').value = " ";
    document.getElementById('nama_jamu').value =" ";
    document.getElementById('umur').value =" ";
    document.getElementById('saran').value =" ";
}
