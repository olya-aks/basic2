<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

use app\models\Plans\Plan;
use app\models\Plans\P0061_PGR_;
use app\models\Plans\P0142_POGO2_;
use app\models\Plans\P0143_POGO3_;
use app\models\Plans\P0191_MESTRN_;
use app\models\Plans\P0203_RPGRU_;
use app\models\Plans\P0301_PRIEM_;
use app\models\Plans\P0302_SDACHA_;
use app\models\Plans\P0320_VIGROB_;
use app\models\Plans\P2112_ISPLOK_;
use app\models\Plans\P4751_TKMN_;
//use app\models\LoginForm;
//use app\models\ContactForm;

class PlanController extends Controller
{

   public function actionShow_tables()
     {
         $post = $request = Yii::$app->request;
         if(!empty($post)){
           $modal_window = new Plan();
           $modal_window->maket = trim($post->post('maket'));
           $modal_window->GetCols();
           $modal_window->GetData();
        }
        return $this->renderAjax($modal_window->maket,[
              'model'=> $modal_window,
            ]);
     }
   /**
  * Добавление комментария
  */
  public function actionSend_p0061_pgr_()
    {
      $post = $request = Yii::$app->request;
      $plan = new P0061_PGR_();
      if ($plan->load($post->post(),'')){
        $plan->ESR = $post->post('ESR');
        $plan->NOD = $post->post('NOD');
        $plan->DATE = $post->post('DATE');
        $plan->PLNVAG = $post->post('PLNVAG');
        $plan->PLNTON = $post->post('PLNTON');
        $plan->save();//добавление комментария в БД
      }
  }
  public function actionSend_p0142_pogo2_()
     {
       $post = $request = Yii::$app->request;
       $plan = new P0142_POGO2_();
       if ($plan->load($post->post(),'')){
         $plan->NOD= $post->post('NOD');
         $plan->DATE= $post->post('DATE');
         $plan->VVS= $post->post('VVS');
         $plan->TVS= $post->post('TVS');
         $plan->VUGOL= $post->post('VUGOL');
         $plan->TUGOL= $post->post('TUGOL');
         $plan->VUGLP= $post->post('VUGLP');
         $plan->TUGLP= $post->post('TUGLP');
         $plan->VKOKS= $post->post('VKOKS');
         $plan->TKOKS= $post->post('TKOKS');
         $plan->VNEFT= $post->post('VNEFT');
         $plan->TNEFT= $post->post('TNEFT');
         $plan->VKNEF= $post->post('VKNEF');
         $plan->TKNEF= $post->post('TKNEF');
         $plan->VTORF= $post->post('VTORF');
         $plan->TTORF= $post->post('TTORF');
         $plan->VFLUS= $post->post('VFLUS');
         $plan->TFLUS= $post->post('TFLUS');
         $plan->VRUDG= $post->post('VRUDG');
         $plan->TRUDG= $post->post('TRUDG');
         $plan->VRUDC= $post->post('VRUDC');
         $plan->TRUDC= $post->post('TRUDC');
         $plan->VCHMT= $post->post('VCHMT');
         $plan->TCHMT= $post->post('TCHMT');
         $plan->VMAOB= $post->post('VMAOB');
         $plan->TMAOB= $post->post('TMAOB');
         $plan->VMETK= $post->post('VMETK');
         $plan->TMETK= $post->post('TMETK');
         $plan->VMETZ= $post->post('VMETZ');
         $plan->TMETZ= $post->post('TMETZ');
         $plan->VMETL= $post->post('VMETL');
         $plan->TMETL= $post->post('TMETL');
         $plan->VCHMA= $post->post('VCHMA');
         $plan->TCHMA= $post->post('TCHMA');
         $plan->VAVTO= $post->post('VAVTO');
         $plan->TAVTO= $post->post('TAVTO');
         $plan->VCVMT= $post->post('VCVMT');
         $plan->TCVMT= $post->post('TCVMT');
         $plan->VUDOB= $post->post('VUDOB');
         $plan->TUDOB= $post->post('TUDOB');
         $plan->VHIMK= $post->post('VHIMK');
         $plan->THIMK= $post->post('THIMK');
         $plan->VSTRG= $post->post('VSTRG');
         $plan->TSTRG= $post->post('TSTRG');
         $plan->VPRMS= $post->post('VPRMS');
         $plan->TPRMS= $post->post('TPRMS');
         $plan->VGRSH= $post->post('VGRSH');
         $plan->TGRSH= $post->post('TGRSH');
         $plan->VOGNE= $post->post('VOGNE');
         $plan->TOGNE= $post->post('TOGNE');
         $plan->VCEMN= $post->post('VCEMN');
         $plan->TCEMN= $post->post('TCEMN');
         $plan->VLESG= $post->post('VLESG');
         $plan->TLESG= $post->post('TLESG');
         $plan->VGLES= $post->post('VGLES');
         $plan->TGLES= $post->post('TGLES');
         $plan->VSAHR= $post->post('VSAHR');
         $plan->TSAHR= $post->post('TSAHR');
         $plan->VMISO= $post->post('VMISO');
         $plan->TMISO= $post->post('TMISO');
         $plan->VRIBA= $post->post('VRIBA');
         $plan->TRIBA= $post->post('TRIBA');
         $plan->VOVOC= $post->post('VOVOC');
         $plan->TOVOC= $post->post('TOVOC');
         $plan->VKART= $post->post('VKART');
         $plan->TKART= $post->post('TKART');
         $plan->VSOL= $post->post('VSOL');
         $plan->TSOL= $post->post('TSOL');
         $plan->VPROD= $post->post('VPROD');
         $plan->TPROD= $post->post('TPROD');
         $plan->VPROM= $post->post('VPROM');
         $plan->TPROM= $post->post('TPROM');
         $plan->VHLOP= $post->post('VHLOP');
         $plan->THLOP= $post->post('THLOP');
         $plan->VSVEK= $post->post('VSVEK');
         $plan->TSVEK= $post->post('TSVEK');
         $plan->VZERN= $post->post('VZERN');
         $plan->TZERN= $post->post('TZERN');
         $plan->VMUKA= $post->post('VMUKA');
         $plan->TMUKA= $post->post('TMUKA');
         $plan->VKOMB= $post->post('VKOMB');
         $plan->TKOMB= $post->post('TKOMB');
         $plan->VGIVN= $post->post('VGIVN');
         $plan->TGIVN= $post->post('TGIVN');
         $plan->VGMIH= $post->post('VGMIH');
         $plan->TGMIH= $post->post('TGMIH');
         $plan->VBUMG= $post->post('VBUMG');
         $plan->TBUMG= $post->post('TBUMG');
         $plan->VPRVV= $post->post('VPRVV');
         $plan->TPRVV= $post->post('TPRVV');
         $plan->VPVUG= $post->post('VPVUG');
         $plan->TPVUG= $post->post('TPVUG');
         $plan->VPVLS= $post->post('VPVLS');
         $plan->TPVLS= $post->post('TPVLS');
         $plan->VPVIM= $post->post('VPVIM');
         $plan->TPVIM= $post->post('TPVIM');
         $plan->VKONT= $post->post('VKONT');
         $plan->TKONT= $post->post('TKONT');
         $plan->VOSGR= $post->post('VOSGR');
         $plan->TOSGR= $post->post('TOSGR');
         $plan->VUDBR= $post->post('VUDBR');
         $plan->TUDBR= $post->post('TUDBR');
         $plan->VMOSK= $post->post('VMOSK');
         $plan->TMOSK= $post->post('TMOSK');
         $plan->VMOBL= $post->post('VMOBL');
         $plan->TMOBL= $post->post('TMOBL');
         $plan->VIZUD= $post->post('VIZUD');
         $plan->TIZUD= $post->post('TIZUD');
         $plan->VMLBP= $post->post('VMLBP');
         $plan->TMLBP= $post->post('TMLBP');
         $plan->VSPRT= $post->post('VSPRT');
         $plan->TSPRT= $post->post('TSPRT');
         $plan->VMPSP= $post->post('VMPSP');
         $plan->TMPSP= $post->post('TMPSP');
         $plan->VSPVS= $post->post('VSPVS');
         $plan->TSPVS= $post->post('TSPVS');

         $plan->save();//добавление комментария в БД
       }
  }
  public function actionSend_p0143_pogo3_()
    {
      $post = $request = Yii::$app->request;
      $plan = new P0143_POGO3_();
      if ($plan->load($post->post(),'')){
        $plan->NOD = $post->post('NOD');
        $plan->DATE = $post->post('DATE');
        $plan->RPS = $post->post('RPS');
        $plan->VS = $post->post('VS');
        $plan->OKT = $post->post('OKT');
        $plan->KLN = $post->post('KLN');
        $plan->BEL = $post->post('BEL');
        $plan->MSK = $post->post('MSK');
        $plan->GRK = $post->post('GRK');
        $plan->SEV = $post->post('SEV');
        $plan->UZP = $post->post('UZP');
        $plan->LVV = $post->post('LVV');
        $plan->MLD = $post->post('MLD');
        $plan->ODS = $post->post('ODS');
        $plan->UGN = $post->post('UGN');
        $plan->PRD = $post->post('PRD');
        $plan->DON = $post->post('DON');
        $plan->SKV = $post->post('SKV');
        $plan->AZR = $post->post('AZR');
        $plan->ARM = $post->post('ARM');
        $plan->UVS = $post->post('UVS');
        $plan->PRV = $post->post('PRV');
        $plan->KUB = $post->post('KUB');
        $plan->ZKZ = $post->post('ZKZ');
        $plan->CLN = $post->post('CLN');
        $plan->ALM = $post->post('ALM');
        $plan->SAZ = $post->post('SAZ');
        $plan->SVR = $post->post('SVR');
        $plan->JUR = $post->post('JUR');
        $plan->ZSB = $post->post('ZSB');
        $plan->KRS = $post->post('KRS');
        $plan->VSB = $post->post('VSB');
        $plan->ZAB = $post->post('ZAB');
        $plan->DVS = $post->post('DVS');
        $plan->TRK = $post->post('TRK');
        $plan->GRZ = $post->post('GRZ');
        $plan->KRG = $post->post('KRG');
        $plan->TDG = $post->post('TDG');
        $plan->SAH = $post->post('SAH');
        $plan->EST = $post->post('EST');
        $plan->LAT = $post->post('LAT');
        $plan->LIT = $post->post('LIT');
        $plan->YKT = $post->post('YKT');
        $plan->save();//добавление комментария в БД
      }
  }
  public function actionSend_p0191_mestrn_()
    {
      $post = $request = Yii::$app->request;
      $plan = new P0191_MESTRN_();
      if ($plan->load($post->post(),'')){
        $plan->NOD = $post->post('NOD');
        $plan->DATE = $post->post('DATE');
        $plan->KVKR = $post->post('KVKR');
        $plan->KVPL = $post->post('KVPL');
        $plan->KVPV = $post->post('KVPV');
        $plan->PARKV = $post->post('PARKV');
        $plan->PARKGR = $post->post('PARKGR');
        $plan->PARKPR = $post->post('PARKPR');
        $plan->PORKR = $post->post('PORKR');
        $plan->PORPL = $post->post('PORPL');
        $plan->PORPV = $post->post('PORPV');
        $plan->PORCS = $post->post('PORCS');
        $plan->PORZR = $post->post('PORZR');
        $plan->PORRF = $post->post('PORRF');
        $plan->PORPR = $post->post('PORPR');
        $plan->PORCM = $post->post('PORCM');
        $plan->NAL01 = $post->post('NAL01');
        $plan->NAL02 = $post->post('NAL02');
        $plan->NAL06 = $post->post('NAL06');
        $plan->NAL07 = $post->post('NAL07');
        $plan->NAL08 = $post->post('NAL08');
        $plan->NAL13 = $post->post('NAL13');
        $plan->NAL15 = $post->post('NAL15');
        $plan->NALVS = $post->post('NALVS');
        $plan->TRALKS = $post->post('TRALKS');
        $plan->TRBELK = $post->post('TRBELK');
        $plan->TRPETU = $post->post('TRPETU');
        $plan->TRCHER = $post->post('TRCHER');
        $plan->TRKUST = $post->post('TRKUST');
        $plan->TRKLIM = $post->post('TRKLIM');
        $plan->TRRJS2 = $post->post('TRRJS2');
        $plan->TRRJS1 = $post->post('TRRJS1');
        $plan->TRPAVL = $post->post('TRPAVL');
        $plan->TRVOLV = $post->post('TRVOLV');
        $plan->TREFRM = $post->post('TREFRM');
        $plan->TRELEC = $post->post('TRELEC');
        $plan->TRKAST = $post->post('TRKAST');
        $plan->TRKURS = $post->post('TRKURS');
        $plan->TRGOTN = $post->post('TRGOTN');
        $plan->TRVOLF = $post->post('TRVOLF');
        $plan->TRZERN = $post->post('TRZERN');
        $plan->TRVITM = $post->post('TRVITM');
        $plan->TRZAKP = $post->post('TRZAKP');
        $plan->TRSURG = $post->post('TRSURG');
        $plan->TRSHES = $post->post('TRSHES');
        $plan->TRKRAS = $post->post('TRKRAS');
        $plan->TRZAOL = $post->post('TRZAOL');
        $plan->TROSUG = $post->post('TROSUG');
        $plan->TRSHAH = $post->post('TRSHAH');
        $plan->TRPOVR = $post->post('TRPOVR');
        $plan->TRHOVR = $post->post('TRHOVR');
        $plan->TRSAVL = $post->post('TRSAVL');
        $plan->TRVSEG = $post->post('TRVSEG');
        $plan->save();//добавление комментария в БД
      }
  }
  public function actionSend_p0203_rpgru_()
    {
      $post = $request = Yii::$app->request;
      $plan = new P0203_RPGRU_();
      if ($plan->load($post->post(),'')){
        $plan->NOD = $post->post('NOD');
        $plan->DATE = $post->post('DATE');
        $plan->KVVS = $post->post('KVVS');
        $plan->KVKR = $post->post('KVKR');
        $plan->KVPL = $post->post('KVPL');
        $plan->KVPV = $post->post('KVPV');
        $plan->KVCS = $post->post('KVCS');
        $plan->KVZR = $post->post('KVZR');
        $plan->KVRF = $post->post('KVRF');
        $plan->KVCG = $post->post('KVCG');
        $plan->KVPR = $post->post('KVPR');
        $plan->KVCM = $post->post('KVCM');
        $plan->KVMV = $post->post('KVMV');
        $plan->save();//добавление комментария в БД
      }
  }



  public function actionSend_p0301_priem_()
    {
      $post = $request = Yii::$app->request;
      $plan = new P0301_PRIEM_();
      if ($plan->load($post->post(),'')){
        $plan->NOD = $post->post('NOD');
        $plan->DATE = $post->post('DATE');
        $plan->VS = $post->post('VS');
        $plan->GRU = $post->post('GRU');
        $plan->GRUKR = $post->post('GRUKR');
        $plan->GRUPL = $post->post('GRUPL');
        $plan->GRUPV = $post->post('GRUPV');
        $plan->GRUZR = $post->post('GRUZR');
        $plan->GRURF = $post->post('GRURF');
        $plan->GRUPR = $post->post('GRUPR');
        $plan->GRUCM = $post->post('GRUCM');
        $plan->GRUCS = $post->post('GRUCS');
        $plan->POR = $post->post('POR');
        $plan->PORKR = $post->post('PORKR');
        $plan->PORPL = $post->post('PORPL');
        $plan->PORPV = $post->post('PORPV');
        $plan->PORZR = $post->post('PORZR');
        $plan->PORRF = $post->post('PORRF');
        $plan->PORPR = $post->post('PORPR');
        $plan->PORCM = $post->post('PORCM');
        $plan->PORCS = $post->post('PORCS');
        $plan->save();//добавление комментария в БД
      }
  }
  public function actionSend_p0302_sdacha_()
    {
      $post = $request = Yii::$app->request;
      $plan = new P0302_SDACHA_();
      if ($plan->load($post->post(),'')){
        $plan->NOD = $post->post('NOD');
        $plan->DATE = $post->post('DATE');
        $plan->SDVS = $post->post('SDVS');
        $plan->SDGRU = $post->post('SDGRU');
        $plan->SDGRKR = $post->post('SDGRKR');
        $plan->SDGRPL = $post->post('SDGRPL');
        $plan->SDGRPV = $post->post('SDGRPV');
        $plan->SDGRZR = $post->post('SDGRZR');
        $plan->SDGRPF = $post->post('SDGRPF');
        $plan->SDGRPR = $post->post('SDGRPR');
        $plan->SDGRCM = $post->post('SDGRCM');
        $plan->SDGRCS = $post->post('SDGRCS');
        $plan->SDPOR = $post->post('SDPOR');
        $plan->SDPRKR = $post->post('SDPRKR');
        $plan->SDPRPL = $post->post('SDPRPL');
        $plan->SDPRPV = $post->post('SDPRPV');
        $plan->SDPRZR = $post->post('SDPRZR');
        $plan->SDPRRF = $post->post('SDPRRF');
        $plan->SDPRPR = $post->post('SDPRPR');
        $plan->SDPRCM = $post->post('SDPRCM');
        $plan->SDPRCS = $post->post('SDPRCS');
        $plan->save();//добавление комментария в БД
      }
  }
  public function actionSend_p0320_vigrob_()
    {
      $post = $request = Yii::$app->request;
      $plan = new P0320_VIGROB_();
      if ($plan->load($post->post(),'')){
        $plan->NOD = $post->post('NOD');
        $plan->DATE = $post->post('DATE');
        $plan->VIGVS = $post->post('VIGVS');
        $plan->VIGKR = $post->post('VIGKR');
        $plan->VIGPL = $post->post('VIGPL');
        $plan->VIGPV = $post->post('VIGPV');
        $plan->VIGZR = $post->post('VIGZR');
        $plan->VIGRF = $post->post('VIGRF');
        $plan->VIGPR = $post->post('VIGPR');
        $plan->VIGCM = $post->post('VIGCM');
        $plan->VIGCS = $post->post('VIGCS');
        $plan->OBVS = $post->post('OBVS');
        $plan->OBMVS = $post->post('OBMVS');
        $plan->OBKR = $post->post('OBKR');
        $plan->OBMKR = $post->post('OBMKR');
        $plan->OBPL = $post->post('OBPL');
        $plan->OBMPL = $post->post('OBMPL');
        $plan->OBPV = $post->post('OBPV');
        $plan->OBMPV = $post->post('OBMPV');
        $plan->OBZR = $post->post('OBZR');
        $plan->OBMZR = $post->post('OBMZR');
        $plan->OBRF = $post->post('OBRF');
        $plan->OBMRF = $post->post('OBMRF');
        $plan->OBPR = $post->post('OBPR');
        $plan->OBMPR = $post->post('OBMPR');
        $plan->OBCM = $post->post('OBCM');
        $plan->OBMCM = $post->post('OBMCM');
        $plan->OBCS = $post->post('OBCS');
        $plan->OBMCS = $post->post('OBMCS');
        $plan->save();//добавление комментария в БД
      }
  }

  public function actionSend_p2112_isplok_()
    {
      $post = $request = Yii::$app->request;
      $plan = new P2112_ISPLOK_();
      if ($plan->load($post->post(),'')){
        $plan->NOD = $post->post('NOD');
        $plan->DATE = $post->post('DATE');
        $plan->VESE = $post->post('VESE');
        $plan->PRZE = $post->post('PRZE');
        $plan->PRBE = $post->post('PRBE');
        $plan->VEST = $post->post('VEST');
        $plan->PRZT = $post->post('PRZT');
        $plan->PRBT = $post->post('PRBT');
        $plan->VESL = $post->post('VESL');
        $plan->PRZL = $post->post('PRZL');
        $plan->PRBL = $post->post('PRBL');
        $plan->USKOR = $post->post('USKOR');
        $plan->TSKOR = $post->post('TSKOR');
        $plan->PRZEL = $post->post('PRZEL');
        $plan->REZRV1 = $post->post('REZRV1');
        $plan->REZRV2 = $post->post('REZRV2');
        $plan->REZRV3 = $post->post('REZRV3');
        $plan->NORMA = $post->post('NORMA');
        $plan->DLINAL = $post->post('DLINAL');
        $plan->DLINAE = $post->post('DLINAE');
        $plan->DLINAT = $post->post('DLINAT');
        $plan->RPPIV = $post->post('RPPIV');
        $plan->RPPZD = $post->post('RPPZD');
        $plan->save();//добавление комментария в БД
      }
  }
  public function actionSend_p4751_tkmn_()
    {
      $post = $request = Yii::$app->request;
      $plan = new P4751_TKMN_();
      if ($plan->load($post->post(),'')){
        $plan->DATE = $post->post('DATE');
        $plan->REG = $post->post('REG');
        $plan->TKMN = $post->post('TKMN');
        $plan->GRUZOOBM = $post->post('GRUZOOBM');
        $plan->TARIFM = $post->post('TARIFM');
        $plan->GRSBPM = $post->post('GRSBPM');
        $plan->GRUZOOBK = $post->post('GRUZOOBK');
        $plan->TARIFK = $post->post('TARIFK');
        $plan->GRSBPK = $post->post('GRSBPK');
        $plan->GRUZOOBG = $post->post('GRUZOOBG');
        $plan->TARIFG = $post->post('TARIFG');
        $plan->GRSBPG = $post->post('GRSBPG');
        $plan->save();//добавление комментария в БД
      }
  }
}
