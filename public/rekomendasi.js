class Jamu {
    constructor( jamu_) {
      this.jamu_ = jamu_;
    }

    namaJamu_() {
        if( this.jamu_ == 'keseleo dan kurang nafsu makan'){
            return "Beras Kencur"
         } else if ( this.jamu_ == 'pegal-pegal') {
            return "Kunyit Asam" 
         }else if ( this.jamu_ == 'keluhan darah tinggi dan gula darah') {
            return "Brotowali" 
         }else if ( this.jamu_ == 'kram perut dan masuk angin') {
            return "Temulawak" 
         }
         ;
    }
  }

  class ulangtahun {
    constructor( year) {
      this.year = year;
    }

    age() {
      let date = new Date();
      let umur = date.getFullYear() - this.year;
      return umur;
    }
  }

class checkSaran extends Jamu {
  constructor(jamu_) {
    super(jamu_);

   }
   konsumsi() {
    if( umur <= 10 ){
       return "Dikonsumsi 1x"
    } else {
       return "Dikonsumsi 2x" 
    }
   }

   penggunaan(){
    if( this.jamu_=='keseleo dan kurang nafsu makan'  ){
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
    console.log(saran)

    //namajamu
    let namajamu = new Jamu (document.getElementById('keluhan').value);
    document.getElementById('nama_jamu').value = namajamu.namaJamu_();
    
    //namakeluhan
    let namakeluhan = document.getElementById("keluhan").value ;
    document.getElementById('hasilkeluhan').value=namakeluhan
    
    //umur
    let hasilumur = new ulangtahun (document.getElementById('lahir').value);
    document.getElementById('umur').value = hasilumur.age();

    //konsultasi
    let hasilcheck = new check(document.getElementById("lahir").value, hasil);
    document.getElementById("konsultasi").value =hasilcheck.konsul();

    //bmi
    let BMI = document.getElementById("tinggi").value/100 ;
    let BMI2 = document.getElementById("berat").value ;
    let hasil = (BMI2)/((BMI)*(BMI))
    document.getElementById('bmi').value=hasil
    let status = '';

    //status berat badan
    if (hasil < 18.5) {
        result = document.getElementById('status') .value = "Kurus"
    }
    else if ((hasil>18.5) && (hasil<=22.9)){
    result = document.getElementById('status').value = "Normal"}

    else if ((hasil>22.9) && (hasil<=29.9)){
    result = document.getElementById('status').value = "Gemuk"}

    else if (hasil>30){
    result = document.getElementById('status').value = "Obesitas"}

}

function hapus (){
    document.getElementById('hasilkeluhan').value = " ";
    document.getElementById('nama_jamu').value =" ";
    document.getElementById('umur').value =" ";
    document.getElementById('saran').value =" ";
}
