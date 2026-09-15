<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AmswerSeeder extends Seeder
{
	public function run()
	{

		$this->db->table('amswer')->truncate();		

		$data = [
			[			
				'amswer' => 'PHP'												
			],
			[				
				'amswer' => 'Python'								
			],
			[				
				'amswer' => 'Javascript'									
			],
			[				
				'amswer' => 'Versión 7.4 en adelante'								
			],
			[				
				'amswer' => 'Versión 5.6 en adelante'									
			],
			[				
				'amswer' => 'Versión 7.1 en adelante'								
			],
			[				
				'amswer' => 'class Home extends BaseController'							
			],
			[				
				'amswer' => 'class Home extends TimeController'								
			],
			[				
				'amswer' => 'class Home extends InitController'							
			],
			[				
				'amswer' => 'public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\
ResponseInterface $response, \Psr\Log\LoggerInterface $logger)'							
			],
			[				
				'amswer' => 'public function AbstractController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\
HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)'							
			],
			[				
				'amswer' => 'public function LoadController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\
ResponseInterface $response, \Psr\Log\LoggerInterface $logger)'							
			],
			[				
				'amswer' => 'archivo .env'							
			],
			[				
				'amswer' => 'archivo .anv'							
			],
			[				
				'amswer' => 'archivo .wnv'							
			],
			[				
				'amswer' => 'CI_ENVIRONMENT = development'							
			],
			[				
				'amswer' => '# CI_ENVIRONMENT = development'							
			],
			[				
				'amswer' => '& CI_ENVIRONMENT = development'							
			],
			[				
				'amswer' => 'app/Config/Database.php'							
			],
			[				
				'amswer' => 'app/Config/App.php'							
			],
			[				
				'amswer' => 'app/Database/Database.php'							
			],
			[				
				'amswer' => 'CI_ENVIRONMENT = development'							
			],
			[				
				'amswer' => 'CI_ENVIRONMENT = production'							
			],
			[				
				'amswer' => 'CI_ENVIRONMENT = testing'							
			],
			[				
				'amswer' => 'index,new,edit,show,create,update,delete'					
			],
			[				
				'amswer' => 'index,new,edit,view,create,update,remove'					
			],
			[				
				'amswer' => 'undex,wew,edit,show,create,update,delete'					
			],
			[				
				'amswer' => 'php spark serve'		
			],
			[				
				'amswer' => 'php artisan start'	
			],
			[				
				'amswer' => 'npm start serve'	
			],
			[				
				'amswer' => 'php bin/console debug:router'	
			],
			[				
				'amswer' => 'php spark routes'	
			],
			[				
				'amswer' => 'php artisan route:list'	
			],
			[				
				'amswer' => '$stripe = Stripe::setApiKey($_ENV["STRIPE_SECRET_KEY"])'	
			],
			[				
				'amswer' => '$stripe = Stripe::setApiKey(sk_test_51KXWacKJXKHeoSJ)'	
			],
			[				
				'amswer' => '$stripe = Stripe::setApiKey(%_ENVIRO("STRIPE_SECRET_KEY"))'
			],
			[				
				'amswer' => 'return $this->json($data)'
			],
			[				
				'amswer' => 'return new Response($data)'
			],
			[				
				'amswer' => 'return new JsonNextponse($data)'
			],
			[				
				'amswer' => '$this->denyAccessUnlessGranted(ROLE_ADMIN)'
			],
			[				
				'amswer' => '- { router: ^/admin, roles: ROLE_ADMIN }'
			],
			[				
				'amswer' => 'Route::Resource(admin, AdminController::class)
  ->middleware(auth:sanctum)'
			],
			[				
				'amswer' => 'API Platform'
			],
			[				
				'amswer' => 'Sanctum'
			],
			[				
				'amswer' => 'Breeze'
			],
			[				
				'amswer' => 'return $this->json(null, Response::HTTP_NO_CONTENT)'
			],
			[				
				'amswer' => 'return $this->json(null, Response::HTTP_SEE_OTHER)'
			],
			[				
				'amswer' => 'return $this->json(null, Response::HTTP_OK)'
			],
			[				
				'amswer' => 'php bin/console make:crud'
			],
			[				
				'amswer' => 'php bin/console create:crud'
			],
			[				
				'amswer' => 'php bin/console bake:crud'
			],
			[				
				'amswer' => '{{ encore_entry_link_tags(app) }}'
			],
			[				
				'amswer' => '{{ encore_create_link_tags(app) }}'
			],
			[				
				'amswer' => '{{ serializer_entry_link_tags(app) }}'
			],
			[				
				'amswer' => 'DoctrineFixturesBundle'
			],
			[				
				'amswer' => 'DoctrineArtisanBundle'
			],
			[				
				'amswer' => 'DoctrineSeedsBundle'
			],
			[				
				'amswer' => 'Doctrine'
			],
			[				
				'amswer' => 'Eloquent'
			],
			[				
				'amswer' => 'Sequelize'
			],








			// [				
			// 	'pensum' => 'Semillas',
			// 	'video' => '11)seedhd.mp4',
			// 	'id_exam' => 1								
			// ],
			// [				
			// 	'pensum' => 'Resource',
			// 	'video' => '12)resourcehd.mp4',
			// 	'id_exam' => 1								
			// ],
			// [				
			// 	'pensum' => 'Resource Vistas',
			// 	'video' => '13)resourcevistashd.mp4',
			// 	'id_exam' => 1								
			// ],
			// [				
			// 	'pensum' => 'Renderizar Vistas',
			// 	'video' => '14)renderhd.mp4',
			// 	'id_exam' => 1								
			// ],
			// [				
			// 	'pensum' => 'Bootstrap Estilos',
			// 	'video' => '15)includeboostrap.mp4',
			// 	'id_exam' => 1								
			// ],
			// [				
			// 	'pensum' => 'Metodo FindAll',
			// 	'video' => '16)findallhd.mp4',
			// 	'id_exam' => 1								
			// ],
			// [				
			// 	'pensum' => 'Entidades',
			// 	'video' => '17)entitieshd.mp4',
			// 	'id_exam' => 1								
			// ],
			// [				
			// 	'pensum' => 'Tablas',
			// 	'video' => '18)tablehd.mp4',
			// 	'id_exam' => 1								
			// ],
			// [				
			// 	'pensum' => 'Formularios',
			// 	'video' => '19)formhd.mp4',
			// 	'id_exam' => 1								
			// ],
			// [				
			// 	'pensum' => 'Insert con Entidades',
			// 	'video' => '20)insertentityhd.mp4',
			// 	'id_exam' => 1								
			// ],
			// [				
			// 	'pensum' => 'Delete Parte 1',
			// 	'video' => '21)delete1hd.mp4',
			// 	'id_exam' => 1								
			// ],
			// [				
			// 	'pensum' => 'Delete Parte 2',
			// 	'video' => '22)delete2hd.mp4',
			// 	'id_exam' => 1								
			// ],
			// [				
			// 	'pensum' => 'Redirect',
			// 	'video' => '23)redirecthd.mp4',
			// 	'id_exam' => 1								
			// ],
			// [				
			// 	'pensum' => 'Show Ejemplo',
			// 	'video' => '24)showhd.mp4',
			// 	'id_exam' => 1								
			// ],
			// [				
			// 	'pensum' => 'Ver Estilos',
			// 	'video' => '25)showverestiloshd.mp4',
			// 	'id_exam' => 1								
			// ],
			// [				
			// 	'pensum' => 'Editar',
			// 	'video' => '26)edithd.mp4',
			// 	'id_exam' => 1								
			// ],
			// [				
			// 	'pensum' => 'Actualizar',
			// 	'video' => '27)updatehd.mp4',
			// 	'id_exam' => 1								
			// ],
			// [				
			// 	'pensum' => 'Validaciones Parte 1',
			// 	'video' => '28)validation1hd.mp4',
			// 	'id_exam' => 1								
			// ],
			// [				
			// 	'pensum' => 'Validaciones Parte 2',
			// 	'video' => '29)validation2hd.mp4',
			// 	'id_exam' => 1								
			// ],
			// [				
			// 	'pensum' => 'Validaciones Parte 3',
			// 	'video' => '30)validation3hd.mp4',
			// 	'id_exam' => 1								
			// ],				
			// [			
			// 	'pensum' => 'Instalar',
			// 	'video' => '1)installsym6es.mp4',
			// 	'id_exam' => 2									
			// ],
			// [				
			// 	'pensum' => 'Estructura',
			// 	'video' => '2)estructurasym6es.mp4',
			// 	'id_exam' => 2								
			// ],
			// [				
			// 	'pensum' => 'Database Configurar',
			// 	'video' => '3)databasesym6es.mp4',
			// 	'id_exam' => 2								
			// ],
			// [				
			// 	'pensum' => 'Auth Configurar',
			// 	'video' => '4)authsym6es.mp4',
			// 	'id_exam' => 2								
			// ],
			// [				
			// 	'pensum' => 'Fixtures Parte 1',
			// 	'video' => '5)fixtures1sym6es.mp4',
			// 	'id_exam' => 2								
			// ],
			// [				
			// 	'pensum' => 'Fixtures Parte 2',
			// 	'video' => '6)fuxtures2sym6es.mp4',
			// 	'id_exam' => 2								
			// ],
			// [				
			// 	'pensum' => 'CRUD Parte 1',
			// 	'video' => '7)crud1sym6es.mp4',
			// 	'id_exam' => 2								
			// ],
			// [				
			// 	'pensum' => 'CRUD Parte 2',
			// 	'video' => '8)crud2sym6es.mp4',
			// 	'id_exam' => 2								
			// ],
			// [				
			// 	'pensum' => 'Auth Ejemplo',
			// 	'video' => '9)authsym6es.mp4',
			// 	'id_exam' => 2								
			// ],
			// [				
			// 	'pensum' => 'Response',
			// 	'video' => '10)responsesym6es.mp4',
			// 	'id_exam' => 2								
			// ],
			// [				
			// 	'pensum' => 'CDN Estilos',
			// 	'video' => '11)cdnsym6es.mp4',
			// 	'id_exam' => 2								
			// ],
			// [				
			// 	'pensum' => 'WebPack Encore Parte 1',
			// 	'video' => '12)wepack1sym6es.mp4',
			// 	'id_exam' => 2								
			// ],
			// [				
			// 	'pensum' => 'WebPack Encore Parte 2',
			// 	'video' => '13)wepack2sym6es.mp4',
			// 	'id_exam' => 2								
			// ],
			// [				
			// 	'pensum' => 'Bootstrap Estilos',
			// 	'video' => '14)boostrapsym6es.mp4',
			// 	'id_exam' => 2								
			// ],
			// [				
			// 	'pensum' => 'EasyAdmin Configurar',
			// 	'video' => '15)easyadminsym6es.mp4',
			// 	'id_exam' => 2								
			// ],
			// [				
			// 	'pensum' => 'Entidades',
			// 	'video' => '16)entitysym6es.mp4',
			// 	'id_exam' => 2								
			// ],
			// [				
			// 	'pensum' => 'Setear Stripe',
			// 	'video' => '17)setsetripesym6es.mp4',
			// 	'id_exam' => 2								
			// ],
			// [				
			// 	'pensum' => 'Customers',
			// 	'video' => '18)customerssym6es.mp4',
			// 	'id_exam' => 2								
			// ],
			// [				
			// 	'pensum' => 'Listar Customers',
			// 	'video' => '19)listsym6.mp4',
			// 	'id_exam' => 2								
			// ],
			// [				
			// 	'pensum' => 'Show Customers',
			// 	'video' => '20)showstripesym6.mp4',
			// 	'id_exam' => 2								
			// ],
			// [				
			// 	'pensum' => 'Delete Customers',
			// 	'video' => '21)deletestripesym6.mp4',
			// 	'id_exam' => 2								
			// ],
			// [				
			// 	'pensum' => 'Serializar',
			// 	'video' => '22)serializesym6.mp4',
			// 	'id_exam' => 2								
			// ],
			// [				
			// 	'pensum' => 'Deserializar',
			// 	'video' => '23)deserializesym6.mp4',
			// 	'id_exam' => 2								
			// ],
			// [				
			// 	'pensum' => 'Agregar Estilos',
			// 	'video' => '24)estilossym6.mp4',
			// 	'id_exam' => 2								
			// ],
			// [				
			// 	'pensum' => 'GRID Estilos',
			// 	'video' => '25)gridsym6.mp4',
			// 	'id_exam' => 2								
			// ],
			// [				
			// 	'pensum' => 'Leaflet Mapas',
			// 	'video' => '26)leafletmapsym6.mp4',
			// 	'id_exam' => 2								
			// ],
			// [				
			// 	'pensum' => 'Logearse',
			// 	'video' => '27)logearseendsym6.mp4',
			// 	'id_exam' => 2								
			// ],
			// [			
			// 	'pensum' => 'Requerimientos',
			// 	'video' => '1)simrequerimientos.mp4',
			// 	'id_exam' => 3									
			// ],
			// [				
			// 	'pensum' => 'Server Local',
			// 	'video' => '2)simserver.mp4',
			// 	'id_exam' => 3								
			// ],
			// [				
			// 	'pensum' => 'Estructura',
			// 	'video' => '3)simestructura.mp4',
			// 	'id_exam' => 3								
			// ],
			// [				
			// 	'pensum' => 'Controladores',
			// 	'video' => '4)simcontroller.mp4',
			// 	'id_exam' => 3								
			// ],
			// [				
			// 	'pensum' => 'Response Ejemplo',
			// 	'video' => '5)simresponse.mp4',
			// 	'id_exam' => 3								
			// ],
			// [				
			// 	'pensum' => 'Rutas',
			// 	'video' => '6)simrouter.mp4',
			// 	'id_exam' => 3								
			// ],
			// [				
			// 	'pensum' => 'Entidades',
			// 	'video' => '7)simentity.mp4',
			// 	'id_exam' => 3								
			// ],
			// [				
			// 	'pensum' => 'Migraciones',
			// 	'video' => '8)simmigrations.mp4',
			// 	'id_exam' => 3								
			// ],
			// [				
			// 	'pensum' => 'CRUD',
			// 	'video' => '9)simcrud.mp4',
			// 	'id_exam' => 3								
			// ],
			// [				
			// 	'pensum' => 'Bootstrap',
			// 	'video' => '10)simboostrap.mp4',
			// 	'id_exam' => 3								
			// ],
			// [				
			// 	'pensum' => 'GRID',
			// 	'video' => '11)simgrid.mp4',
			// 	'id_exam' => 3								
			// ],
			// [				
			// 	'pensum' => 'Refrescar',
			// 	'video' => '12)simrefresh.mp4',
			// 	'id_exam' => 3								
			// ],
			// [				
			// 	'pensum' => 'Valor',
			// 	'video' => '13)simvalor.mp4',
			// 	'id_exam' => 3								
			// ],
			// [				
			// 	'pensum' => 'Insertar',
			// 	'video' => '14)siminsert.mp4',
			// 	'id_exam' => 3								
			// ],
			// [				
			// 	'pensum' => 'Eliminar',
			// 	'video' => '15)simdelete.mp4',
			// 	'id_exam' => 3								
			// ],
			// [				
			// 	'pensum' => 'MakeUser',
			// 	'video' => '16)sinmakeuser.mp4',
			// 	'id_exam' => 3								
			// ],
			// [				
			// 	'pensum' => 'MakeCrud',
			// 	'video' => '17)sinmakecrud.mp4',
			// 	'id_exam' => 3								
			// ],
			// [				
			// 	'pensum' => 'Fixtures',
			// 	'video' => '18)simfixtures.mp4',
			// 	'id_exam' => 3								
			// ],
			// [				
			// 	'pensum' => 'Fixtures Ejemplo',
			// 	'video' => '19)simfixturesload.mp4',
			// 	'id_exam' => 3								
			// ],
			// [				
			// 	'pensum' => 'LoadFixtures',
			// 	'video' => '20)simloadfixtures.mp4',
			// 	'id_exam' => 3								
			// ],
			// [				
			// 	'pensum' => 'Accesos',
			// 	'video' => '21)simaccesos.mp4',
			// 	'id_exam' => 3								
			// ],
			// [				
			// 	'pensum' => 'Excepciones',
			// 	'video' => '22)simexceptions.mp4',
			// 	'id_exam' => 3								
			// ],
			// [				
			// 	'pensum' => 'Login',
			// 	'video' => '23)simlogin.mp4',
			// 	'id_exam' => 3								
			// ],
			// [				
			// 	'pensum' => 'Login User',
			// 	'video' => '24)simloginuser.mp4',
			// 	'id_exam' => 3								
			// ],
			// [				
			// 	'pensum' => 'Archivos Js',
			// 	'video' => '25)simjs.mp4',
			// 	'id_exam' => 3								
			// ],
			// [				
			// 	'pensum' => 'DataTables',
			// 	'video' => '26)simdatables.mp4',
			// 	'id_exam' => 3								
			// ],
			// [				
			// 	'pensum' => 'Formularios',
			// 	'video' => '27)registerform.mp4',
			// 	'id_exam' => 3								
			// ],
			// [			
			// 	'pensum' => 'Instalar con Composer',
			// 	'video' => '1)yiicomposer.mp4',
			// 	'id_exam' => 4									
			// ],
			// [				
			// 	'pensum' => 'Url Amigables',
			// 	'video' => '2)yiiurl.mp4',
			// 	'id_exam' => 4								
			// ],
			// [				
			// 	'pensum' => 'Generador Gii',
			// 	'video' => '3)yiigii.mp4',
			// 	'id_exam' => 4								
			// ],
			// [				
			// 	'pensum' => 'Consola',
			// 	'video' => '4)yiigiicli.mp4',
			// 	'id_exam' => 4								
			// ],
			// [				
			// 	'pensum' => 'Base de Datos',
			// 	'video' => '5)yiidb.mp4',
			// 	'id_exam' => 4								
			// ],
			// [				
			// 	'pensum' => 'Modelos',
			// 	'video' => '6)yii2crudmodels.mp4',
			// 	'id_exam' => 4								
			// ],
			// [				
			// 	'pensum' => 'CRUD',
			// 	'video' => '7)yii2crudend.mp4',
			// 	'id_exam' => 4								
			// ],
			// [				
			// 	'pensum' => 'Auth Parte 1',
			// 	'video' => '8)yii2auth.mp4',
			// 	'id_exam' => 4								
			// ],
			// [				
			// 	'pensum' => 'Auth Parte 2',
			// 	'video' => '9)yii2auth2.mp4',
			// 	'id_exam' => 4								
			// ],
			// [				
			// 	'pensum' => 'Migraciones',
			// 	'video' => '10)yii2authmigra.mp4',
			// 	'id_exam' => 4								
			// ],
			// [				
			// 	'pensum' => 'Sobreescribir',
			// 	'video' => '11)yii2modelover.mp4',
			// 	'id_exam' => 4								
			// ],
			// [				
			// 	'pensum' => 'Metodos',
			// 	'video' => '12)yii2methodsuser.mp4',
			// 	'id_exam' => 4								
			// ],
			// [				
			// 	'pensum' => 'Fixtures',
			// 	'video' => '13)yii2fixtures.mp4',
			// 	'id_exam' => 4								
			// ],
			// [				
			// 	'pensum' => 'Setear Stripe',
			// 	'video' => '200)yii2stripe.mp4',
			// 	'id_exam' => 4								
			// ],
			// [				
			// 	'pensum' => 'Customers',
			// 	'video' => '201)yii2customer.mp4',
			// 	'id_exam' => 4								
			// ],
			// [				
			// 	'pensum' => 'CRUD Customers',
			// 	'video' => '202)yii2crud.mp4',
			// 	'id_exam' => 4								
			// ],
			// [				
			// 	'pensum' => 'Instalar',
			// 	'video' => '1)newlaracomposer.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Estructura',
			// 	'video' => '2)newlaraestructura.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Controladores',
			// 	'video' => '3)newlaracontroller.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Database',
			// 	'video' => '4)newlaradb.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Eloquent',
			// 	'video' => '5)newlaraeloquent.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Parametros',
			// 	'video' => '6)newlaraparams.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Joins',
			// 	'video' => '7)newlarajoins.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Migraciones',
			// 	'video' => '8)newlaramigrations.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Factory',
			// 	'video' => '9)newlarafactory.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Logs',
			// 	'video' => '10)newlaralogs.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Headers',
			// 	'video' => '11)newlaraheaders.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Querys Eloquent',
			// 	'video' => '12)newartisanquerys.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Relaciones de Tablas',
			// 	'video' => '13)newlararelation.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Widget Parte 1',
			// 	'video' => '14)newlarawidget1.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Widget Parte 2',
			// 	'video' => '15)newlarawidgets2.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Widget Parte 3',
			// 	'video' => '16)newlarawidgets3.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'API Rest Laravel 9 y 10',
			// 	'video' => '1)instalar_laravel9end.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Rutas de una API',
			// 	'video' => '2)rutas_laravel9_end.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Controladores',
			// 	'video' => '3)controllers_laravel9_end.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Migraciones',
			// 	'video' => '4)migraciones_laravel9end.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Semillas',
			// 	'video' => '5)seeds_laravel9end.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Configurar Sanctum',
			// 	'video' => '6)sactum_laravel9end.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Peticiones Get',
			// 	'video' => '7)show_laravel_end.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Peticiones Post',
			// 	'video' => '8)post_laravel_end.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Peticiones Put',
			// 	'video' => '9)update_laravel_end.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Peticiones Delete',
			// 	'video' => '10)delete_laravel_end.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Joins',
			// 	'video' => '11)joins_laravel_end.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'API de Stripe',
			// 	'video' => '12)setstripelara9.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Peticiones Get con Stripe',
			// 	'video' => '13)stripegetlara9.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Peticiones Delete con Stripe',
			// 	'video' => '14)stripedeletelara9.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Usar Nodejs para la SPA',
			// 	'video' => '40)nodelara9.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Componentes en Vuejs',
			// 	'video' => '41)componentslara9.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Autenticando con Vue y Axios',
			// 	'video' => '42)authlara9.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'Consumir Servicios de la API',
			// 	'video' => '43)endpoinstlara9.mp4',
			// 	'id_exam' => 5								
			// ],
			// [				
			// 	'pensum' => 'CORS con Ejemplo',
			// 	'video' => '44)corslara9.mp4',
			// 	'id_exam' => 5								
			// ],			
			// [				
			// 	'pensum' => 'Instalar',
			// 	'video' => '1)cakeinstalarnew.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Database',
			// 	'video' => '2)cakedatabasenew.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Migraciones Parte 1',
			// 	'video' => '3)cakemigrationnew.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Migraciones Parte 2',
			// 	'video' => '4)cakemigrations2new.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Semillas',
			// 	'video' => '5)cakeseedsnew.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'CRUD',
			// 	'video' => '6)cakecrudnew.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Data de Prueba',
			// 	'video' => '7)caketestnew.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Autenticacion Parte 1',
			// 	'video' => '8)cakeauth1new.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Autenticacion Parte 2',
			// 	'video' => '9)cakeauth2new.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Autenticacion Parte 3',
			// 	'video' => '10)auth3new.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Rutas Parte 1',
			// 	'video' => '11)routes1new.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Rutas Parte 2',
			// 	'video' => '12)routes2new.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Mapas con Leaflet',
			// 	'video' => '13)mapnew.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Logearse',
			// 	'video' => '14)cakelogoutnew.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Semillas con Entidades',
			// 	'video' => '15)cakeauthseednew.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Excepciones',
			// 	'video' => '16)cakeexceptionsnew.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Stripe API',
			// 	'video' => '17)cakesetearstripenew.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Listar Customers',
			// 	'video' => '18)cakeallcustomersnew.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Show Customers',
			// 	'video' => '19)cakeshownew.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Delete Customers',
			// 	'video' => '20)cakedeletenew.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Mas sobre Seeders',
			// 	'video' => '40)cakemodseednew.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Insertar Users',
			// 	'video' => '41)cakeuseraddnew.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Autorizacion',
			// 	'video' => '42)cakeautorinew.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Politicas',
			// 	'video' => '43)cakepoliciesnew.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Retringir Acceso 403',
			// 	'video' => '44)cakeaccesnew.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Proyecto CRUD Relacional',
			// 	'video' => '200)cakemigrations.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Crear el CRUD',
			// 	'video' => '201)cakecrud.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Agregando la Data',
			// 	'video' => '202)cakeseeds.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Entidades y Relaciones',
			// 	'video' => '203)cakeentity.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Relacion Uno a Muchos y Muchos a Muchos',
			// 	'video' => '204)cakerelation.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Cakephp 4.4 lo Nuevo',
			// 	'video' => '100)newcake4.4.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Entendiendo el Scope',
			// 	'video' => '101)newcakeaprefix.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Actualizar proyectos de 4.3 a 4.4',
			// 	'video' => '102)newcakeupgrade.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Crear una API REST',
			// 	'video' => '103)newcakeapi.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Deploy Parte 1',
			// 	'video' => '30)newcakedeploy1.mp4',
			// 	'id_exam' => 6								
			// ],
			// [				
			// 	'pensum' => 'Deploy Parte 2',
			// 	'video' => '31)newcakedeploy2.mp4',
			// 	'id_exam' => 6								
			// ],														
		];

		$this->db->table('amswer')->insertBatch($data);
	}
}
