<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\RegisterForm; //modelo registro
use app\models\Users; //modelo registro


class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        //Si el usuario no es un invitado retorna al home
        if (!Yii::$app->user->isGuest) {
            return $this->goHome(); 
        }

        //Se crea el formulario
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        //se muestra la vista de login
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();        

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    
    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionRegister()
    {        
        //Se crea el formulario del registro
        $model = new RegisterForm();

        if ($model->load(Yii::$app->request->post())   /*  && $model->validate() */) {

            //Se instancia el modelo Users para almacenar los datos del formulario
            //en la DB, con la encriptacion de la clave. El rol y name son obligatorios.
            $dataUser = new Users();
            $dataUser->name = $model->name;
            $dataUser->password = crypt($model->password, '<R><aq2kT,+h349:');
            $dataUser->rol= 2;
            $dataUser->state= 1;
            $dataUser->email= $model->email;

            //Cuando se guarda el registro se envia un setFlash para mostrar el mensaje valido
            if($dataUser->save()) Yii::$app->session->setFlash('success', "El registro fue realizado correctamente."); 
            else Yii::$app->session->setFlash('error', "Usuario no registrado");
            /* echo '<pre>';
            var_dump($dataUser->password);
            exit; */

            return $this->render('register_confirm', ['model' => $model]);

        } else {
            // la página es mostrada inicialmente o hay algún error de validación            
            return $this->render('register', ['model' => $model]);
        }
    }


    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
