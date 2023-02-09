<?php

class Fuzzy_model extends CI_Model
{
   ///CARI MIU
   public function Absence($defuzy){
    if( $defuzy <= 0.3) {
        $Absence = 1.0;
    }elseif ($defuzy > 0.3 &&  $defuzy <= 0.7) {
        $Absence = (0.7 - $defuzy)/0.4;
    }elseif ($defuzy > 0.7){
        $Absence =0.0;
    }
    return $Absence;
}

public function Presence($defuzy){
    if( $defuzy >= 0.7) {
        $Presence = 1.0;
    }elseif ($defuzy > 0.3 &&  $defuzy <= 0.7) {
        $Presence = ($defuzy - 0.3)/0.4;
    }elseif ($defuzy < 0.3){
        $Presence =0.0;
    }
    return $Presence;
}

    public function umurDewasa($umur){
        if( $umur <= 29) {
            $umurDewasa = 1;
        }elseif ($umur >= 29 &&  $umur <= 55) {
            $umurDewasa = (55 - $umur)/26;
        }elseif ($umur >= 55){
            $umurDewasa =0;
        }
        return $umurDewasa;
    }

    public function UmurLansia($umur){
        if( $umur <29) {
            $UmurLansia = 0;
        }elseif ($umur >= 29 &&  $umur < 55) {
            $UmurLansia = ($umur - 29)/26;
        }elseif ($umur >= 55 &&  $umur < 77) {
            $UmurLansia = (77 - $umur)/22; 
        }elseif ($umur > 77){
            $UmurLansia =0;
        }
        return $UmurLansia;
    }

    public function UmurManula($umur){
        if( $umur >= 77) {
            $UmurManula = 1;
        }elseif ($umur >= 55 &&  $umur < 77) {
            $UmurManula = ($umur - 55)/22;
        }elseif ($umur < 55){
            $UmurManula =0;
        }
        return $UmurManula;
    }

    public function kolesRendah($koles){
        if( $koles <= 126) {
            $kolesRendah = 1;
        }elseif ($koles >= 126 &&  $koles <= 245) {
            $kolesRendah = (245 - $koles)/119;
        }elseif ($koles > 245){
            $kolesRendah = 0;
        } 
        return $kolesRendah;
    }

    public function kolesSedang($koles){
         if( $koles <126) {
            $kolesSedang = 0;
        }elseif ($koles >= 126 &&  $koles < 245) {
            $kolesSedang = ($koles - 126)/119;
        }elseif ($koles >= 245 &&  $koles < 564) {
            $kolesSedang = (564 - $koles)/319; 
        }elseif ($koles > 564){
            $kolesSedang =0;
        }
        return $kolesSedang;
    }

    public function kolesTinggi($koles){
        if( $koles >= 564) {
            $kolesTinggi = 1;
        }elseif ($koles >= 245 &&  $koles < 564) {
            $kolesTinggi = ($koles - 245)/319;
        }elseif ($koles <=245){
            $kolesTinggi =0;
        }
        return $kolesTinggi;
    }

    public function std_rendah($std){
        if( $std <= 0) {
            $stdRendah = 1;
        }elseif ($std >= 0 &&  $std <= 2) {
            $stdRendah = (2 - $std)/2;
        }elseif ($std > 2){
            $stdRendah = 0;
        } 
        return $stdRendah;
    }
    public function std_sedang($std){
         if( $std <0) {
            $stdSedang = 0;
        }elseif ($std >= 0 &&  $std < 2) {
            $stdSedang = ($std - 0)/2;
        }elseif ($std >= 2 &&  $std < 4) {
            $stdSedang = (4 - $std)/2; 
        }elseif ($std > 4){
            $stdSedang =0;
        }
        return $stdSedang;
    }
    public function std_tinggi($std){
        if( $std >= 4) {
            $stdTinggi = 1;
        }elseif ($std >= 2 &&  $std < 4) {
            $stdTinggi = ($std - 2)/2;
        }elseif ($std <=2){
            $stdTinggi =0;
        }
        return $stdTinggi;
    }
 /////////////////////////////////////////////////

    public function calculateZ($alpha,$a,$b,$hasil){
        if($hasil == "absence"){
            $z = $alpha; 
        }else if($hasil == "presence"){
            $z = $b-$alpha*($b-$a);  
        }
        return $z;
    }

    public function tambah()
    {
        //Perhitungan Umur
        $umur = $this->input->post('age');
        $koles = $this->input->post('cholesterol');
        $std = $this->input->post('st_dep');
        
/////////////////////////// NENTUIN MIU MASUK RULES YANG MANAAA

        $ages = ["dewasa"=> $this->umurDewasa($umur), "manula"=> $this->UmurManula($umur), "lansia"=> $this->UmurLansia($umur)];
        $kolest = ["rendah"=> $this->kolesRendah($koles), "sedang"=> $this->kolesSedang($koles), "tinggi"=> $this->kolesTinggi($koles)];
        $stdvar = ["rendah"=> $this->std_rendah($std), "sedang"=> $this->std_sedang($std), "tinggi"=> $this->std_tinggi($std)];

        $rules = [
            //R1
            ["usia"=>"dewasa","kolestrol"=>"rendah","std"=>"rendah","hasil"=>"absence"]
            ,
            //R2
            ["usia"=>"dewasa","kolestrol"=>"rendah","std"=>"sedang","hasil"=>"absence"]
            ,
            //R3
            ["usia"=>"dewasa","kolestrol"=>"rendah","std"=>"tinggi","hasil"=>"absence"]
            ,
            //R4
            ["usia"=>"dewasa","kolestrol"=>"sedang","std"=>"rendah","hasil"=>"absence"]
            ,
            //R5
            ["usia"=>"dewasa","kolestrol"=>"sedang","std"=>"sedang","hasil"=>"absence"]
            ,
            //R6
            ["usia"=>"dewasa","kolestrol"=>"sedang","std"=>"tinggi","hasil"=>"absence"]
            ,
            //R7
            ["usia"=>"dewasa","kolestrol"=>"tinggi","std"=>"rendah","hasil"=>"absence"]
            ,
            //R8
            ["usia"=>"dewasa","kolestrol"=>"tinggi","std"=>"sedang","hasil"=>"absence"]
            ,
            //R9
            ["usia"=>"dewasa","kolestrol"=>"tinggi","std"=>"tinggi","hasil"=>"presence"]
            ,
            //R10
            ["usia"=>"lansia","kolestrol"=>"rendah","std"=>"rendah","hasil"=>"absence"]
            ,
            //R11
            ["usia"=>"lansia","kolestrol"=>"rendah","std"=>"sedang","hasil"=>"absence"]
            ,
            //R12
            ["usia"=>"lansia","kolestrol"=>"rendah","std"=>"tinggi","hasil"=>"absence"]
            ,
            //R13
            ["usia"=>"lansia","kolestrol"=>"sedang","std"=>"rendah","hasil"=>"absence"]
            ,
            //R14
            ["usia"=>"lansia","kolestrol"=>"sedang","std"=>"sedang","hasil"=>"absence"]
            ,
            //R15
            ["usia"=>"lansia","kolestrol"=>"sedang","std"=>"tinggi","hasil"=>"presence"]
            ,
            //R16
            ["usia"=>"lansia","kolestrol"=>"tinggi","std"=>"rendah","hasil"=>"absence"]
            ,
            //R17
            ["usia"=>"lansia","kolestrol"=>"tinggi","std"=>"sedang","hasil"=>"presence"]
            ,
            //R18
            ["usia"=>"lansia","kolestrol"=>"tinggi","std"=>"tinggi","hasil"=>"presence"]
            ,
            //R19
            ["usia"=>"manula","kolestrol"=>"rendah","std"=>"rendah","hasil"=>"absence"]
            ,
            //R20
            ["usia"=>"manula","kolestrol"=>"rendah","std"=>"sedang","hasil"=>"absence"]
            ,
            //R21
            ["usia"=>"manula","kolestrol"=>"rendah","std"=>"tinggi","hasil"=>"presence"]
            ,
            //R22
            ["usia"=>"manula","kolestrol"=>"sedang","std"=>"rendah","hasil"=>"absence"]
            ,
            //R23
            ["usia"=>"manula","kolestrol"=>"sedang","std"=>"sedang","hasil"=>"presence"]
            ,
            //R24
            ["usia"=>"manula","kolestrol"=>"sedang","std"=>"tinggi","hasil"=>"presence"]
            ,
            //R25
            ["usia"=>"manula","kolestrol"=>"tinggi","std"=>"rendah","hasil"=>"absence"]
            ,
            //R26
            ["usia"=>"manula","kolestrol"=>"tinggi","std"=>"sedang","hasil"=>"presence"]
            ,
            //R27
            ["usia"=>"manula","kolestrol"=>"tinggi","std"=>"tinggi","hasil"=>"presence"]
            ,
        ];

        $values = [];
        $alpha = 0;
        $matching_rules = [];
        for ($i = 0; $i < count($rules); $i++) {
        $usia_r = $rules[$i]["usia"];
        $koles_r = $rules[$i]["kolestrol"];
        $std_r = $rules[$i]["std"];
        $values[] = [$ages[$usia_r], $kolest[$koles_r], $stdvar[$std_r]];
        $alpha = min($values[$i]);
        if ($alpha > 0) {
            $z = $this->calculateZ($alpha, 0,1, $rules[$i]['hasil']);
            $matching_rules[] = array(
                'rule_index' => $i,
                'alpha' => $alpha,
                'hasil' => $rules[$i]['hasil'],
                'z' => $z
            );

            $store_match[] = array(
                'Rule' => $i+1, 
                'Hasil' => $rules[$i]['hasil'],
                'Alpha' => $alpha,
                'Z' => $z,
            );

            }   
        }

        $output_values = array();
        $rata2 = 0.0;
        $rata = 0.0;
        for ($i = 0; $i < count($matching_rules); $i++) {
             $index = $matching_rules[$i]['rule_index'];
                $alpha = $matching_rules[$i]['alpha'];
                $hasil = $matching_rules[$i]['hasil'];
                $z = $matching_rules[$i]['z'];
                // if ($hasil == "presence") {
                    $rata2 += $alpha*$z;
                    $rata += $alpha;
                // } else if ($hasil == "absence") {
                //     $rata2 += (1-$alpha)*$z;
                //     $rata += (1-$alpha);
                // }
                $defuzzy = $rata2 / $rata;
            }


        //Hasil
        $Absence =  $this->Absence($defuzzy);
        $Presence = $this->Presence($defuzzy);
       
        if ($Presence > $Absence) {
            $hasil_akhir = "Presence"; 
        } else {
            $hasil_akhir = "Absence"; 
        }


        // var_dump($alpha);
      
        // die();

        $data = [
            "id_predic" => '',
            "age" => $this->input->post('age', true),
            "ageDewasa" => $ages["dewasa"],
            "ageLansia" => $ages["lansia"],
            "ageManula" => $ages["manula"],
            "cholesterol" => $this->input->post('cholesterol', true),
            "cholesterolRendah" =>$kolest["rendah"],
            "cholesterolSedang" =>$kolest["sedang"],
            "cholesterolTinggi"=>$kolest["tinggi"],
            "st_dep" => $this->input->post('st_dep', true),
            "stdRendah" => $stdvar["rendah"],
            "stdSedang" =>  $stdvar["sedang"],
            "stdTinggi" => $stdvar["tinggi"],
            "rules" =>  json_encode($store_match),
            "predic_dec" => $defuzzy,  
            "predic" =>  $hasil_akhir,  
        ];
        
        $this->db->insert('hdp', $data);
    }


    public function getData(){
        return $this->db->get('hdp')->result_array();
    }

    public function hapus($id_predic)
    {
        $this->db->where('id_predic', $id_predic);
        $this->db->delete('hdp');
    }
}
