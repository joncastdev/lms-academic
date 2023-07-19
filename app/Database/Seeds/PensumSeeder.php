<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PensumSeeder extends Seeder
{
	public function run()
	{

		$this->db->table('pensums')->truncate();
		//cualquiera de los 2 metodos
		// $this->db->table('pensums')->emptyTable();

		$data = [
			[			
				'pensum' => 'Herramientas',
				'video' => '1)herramientashd.mp4',
				'id_course' => 1									
			],
			[				
				'pensum' => 'Servidor Local',
				'video' => '2)levantarserverhd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Estructura',
				'video' => '3)estructurahd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Metodos por Defecto',
				'video' => '4)metododefectohd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Crear un Metodo',
				'video' => '5)metodohd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Parametros',
				'video' => '6)paramshd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Base de Datos',
				'video' => '7)dbhd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Modelos',
				'video' => '8)modelshd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Migraciones',
				'video' => '9)migrationshd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Refrescar Migraciones',
				'video' => '10)refreshhd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Semillas',
				'video' => '11)seedhd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Resource',
				'video' => '12)resourcehd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Resource Vistas',
				'video' => '13)resourcevistashd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Renderizar Vistas',
				'video' => '14)renderhd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Bootstrap Estilos',
				'video' => '15)includeboostrap.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Metodo FindAll',
				'video' => '16)findallhd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Entidades',
				'video' => '17)entitieshd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Tablas',
				'video' => '18)tablehd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Formularios',
				'video' => '19)formhd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Insert con Entidades',
				'video' => '20)insertentityhd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Delete Parte 1',
				'video' => '21)delete1hd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Delete Parte 2',
				'video' => '22)delete2hd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Redirect',
				'video' => '23)redirecthd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Show Ejemplo',
				'video' => '24)showhd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Ver Estilos',
				'video' => '25)showverestiloshd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Editar',
				'video' => '26)edithd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Actualizar',
				'video' => '27)updatehd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Validaciones Parte 1',
				'video' => '28)validation1hd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Validaciones Parte 2',
				'video' => '29)validation2hd.mp4',
				'id_course' => 1								
			],
			[				
				'pensum' => 'Validaciones Parte 3',
				'video' => '30)validation3hd.mp4',
				'id_course' => 1								
			],				
			[			
				'pensum' => 'Instalar',
				'video' => '1)installsym6es.mp4',
				'id_course' => 2									
			],
			[				
				'pensum' => 'Estructura',
				'video' => '2)estructurasym6es.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'Database Configurar',
				'video' => '3)databasesym6es.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'Auth Configurar',
				'video' => '4)authsym6es.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'Fixtures Parte 1',
				'video' => '5)fixtures1sym6es.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'Fixtures Parte 2',
				'video' => '6)fuxtures2sym6es.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'CRUD Parte 1',
				'video' => '7)crud1sym6es.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'CRUD Parte 2',
				'video' => '8)crud2sym6es.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'Auth Ejemplo',
				'video' => '9)authsym6es.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'Response',
				'video' => '10)responsesym6es.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'CDN Estilos',
				'video' => '11)cdnsym6es.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'WebPack Encore Parte 1',
				'video' => '12)wepack1sym6es.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'WebPack Encore Parte 2',
				'video' => '13)wepack2sym6es.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'Bootstrap Estilos',
				'video' => '14)boostrapsym6es.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'EasyAdmin Configurar',
				'video' => '15)easyadminsym6es.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'Entidades',
				'video' => '16)entitysym6es.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'Setear Stripe',
				'video' => '17)setsetripesym6es.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'Customers',
				'video' => '18)customerssym6es.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'Listar Customers',
				'video' => '19)listsym6.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'Show Customers',
				'video' => '20)showstripesym6.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'Delete Customers',
				'video' => '21)deletestripesym6.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'Serializar',
				'video' => '22)serializesym6.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'Deserializar',
				'video' => '23)deserializesym6.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'Agregar Estilos',
				'video' => '24)estilossym6.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'GRID Estilos',
				'video' => '25)gridsym6.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'Leaflet Mapas',
				'video' => '26)leafletmapsym6.mp4',
				'id_course' => 2								
			],
			[				
				'pensum' => 'Logearse',
				'video' => '27)logearseendsym6.mp4',
				'id_course' => 2								
			],
			[			
				'pensum' => 'Requerimientos',
				'video' => '1)simrequerimientos.mp4',
				'id_course' => 3									
			],
			[				
				'pensum' => 'Server Local',
				'video' => '2)simserver.mp4',
				'id_course' => 3								
			],
			[				
				'pensum' => 'Estructura',
				'video' => '3)simestructura.mp4',
				'id_course' => 3								
			],
			[				
				'pensum' => 'Controladores',
				'video' => '4)simcontroller.mp4',
				'id_course' => 3								
			],
			[				
				'pensum' => 'Response Ejemplo',
				'video' => '5)simresponse.mp4',
				'id_course' => 3								
			],
			[				
				'pensum' => 'Rutas',
				'video' => '6)simrouter.mp4',
				'id_course' => 3								
			],
			[				
				'pensum' => 'Entidades',
				'video' => '7)simentity.mp4',
				'id_course' => 3								
			],
			[				
				'pensum' => 'Migraciones',
				'video' => '8)simmigrations.mp4',
				'id_course' => 3								
			],
			[				
				'pensum' => 'CRUD',
				'video' => '9)simcrud.mp4',
				'id_course' => 3								
			],
			[				
				'pensum' => 'Bootstrap',
				'video' => '10)simboostrap.mp4',
				'id_course' => 3								
			],
			[				
				'pensum' => 'GRID',
				'video' => '11)simgrid.mp4',
				'id_course' => 3								
			],
			[				
				'pensum' => 'Refrescar',
				'video' => '12)simrefresh.mp4',
				'id_course' => 3								
			],
			[				
				'pensum' => 'Valor',
				'video' => '13)simvalor.mp4',
				'id_course' => 3								
			],
			[				
				'pensum' => 'Insertar',
				'video' => '14)siminsert.mp4',
				'id_course' => 3								
			],
			[				
				'pensum' => 'Eliminar',
				'video' => '15)simdelete.mp4',
				'id_course' => 3								
			],
			[				
				'pensum' => 'MakeUser',
				'video' => '16)sinmakeuser.mp4',
				'id_course' => 3								
			],
			[				
				'pensum' => 'MakeCrud',
				'video' => '17)sinmakecrud.mp4',
				'id_course' => 3								
			],
			[				
				'pensum' => 'Fixtures',
				'video' => '18)simfixtures.mp4',
				'id_course' => 3								
			],
			[				
				'pensum' => 'Fixtures Ejemplo',
				'video' => '19)simfixturesload.mp4',
				'id_course' => 3								
			],
			[				
				'pensum' => 'LoadFixtures',
				'video' => '20)simloadfixtures.mp4',
				'id_course' => 3								
			],
			[				
				'pensum' => 'Accesos',
				'video' => '21)simaccesos.mp4',
				'id_course' => 3								
			],
			[				
				'pensum' => 'Excepciones',
				'video' => '22)simexceptions.mp4',
				'id_course' => 3								
			],
			[				
				'pensum' => 'Login',
				'video' => '23)simlogin.mp4',
				'id_course' => 3								
			],
			[				
				'pensum' => 'Login User',
				'video' => '24)simloginuser.mp4',
				'id_course' => 3								
			],
			[				
				'pensum' => 'Archivos Js',
				'video' => '25)simjs.mp4',
				'id_course' => 3								
			],
			[				
				'pensum' => 'DataTables',
				'video' => '26)simdatables.mp4',
				'id_course' => 3								
			],
			[				
				'pensum' => 'Formularios',
				'video' => '27)registerform.mp4',
				'id_course' => 3								
			],
			[			
				'pensum' => 'Instalar con Composer',
				'video' => '1)yiicomposer.mp4',
				'id_course' => 4									
			],
			[				
				'pensum' => 'Url Amigables',
				'video' => '2)yiiurl.mp4',
				'id_course' => 4								
			],
			[				
				'pensum' => 'Generador Gii',
				'video' => '3)yiigii.mp4',
				'id_course' => 4								
			],
			[				
				'pensum' => 'Consola',
				'video' => '4)yiigiicli.mp4',
				'id_course' => 4								
			],
			[				
				'pensum' => 'Base de Datos',
				'video' => '5)yiidb.mp4',
				'id_course' => 4								
			],
			[				
				'pensum' => 'Modelos',
				'video' => '6)yii2crudmodels.mp4',
				'id_course' => 4								
			],
			[				
				'pensum' => 'CRUD',
				'video' => '7)yii2crudend.mp4',
				'id_course' => 4								
			],
			[				
				'pensum' => 'Auth Parte 1',
				'video' => '8)yii2auth.mp4',
				'id_course' => 4								
			],
			[				
				'pensum' => 'Auth Parte 2',
				'video' => '9)yii2auth2.mp4',
				'id_course' => 4								
			],
			[				
				'pensum' => 'Migraciones',
				'video' => '10)yii2authmigra.mp4',
				'id_course' => 4								
			],
			[				
				'pensum' => 'Sobreescribir',
				'video' => '11)yii2modelover.mp4',
				'id_course' => 4								
			],
			[				
				'pensum' => 'Metodos',
				'video' => '12)yii2methodsuser.mp4',
				'id_course' => 4								
			],
			[				
				'pensum' => 'Fixtures',
				'video' => '13)yii2fixtures.mp4',
				'id_course' => 4								
			],
			[				
				'pensum' => 'Setear Stripe',
				'video' => '200)yii2stripe.mp4',
				'id_course' => 4								
			],
			[				
				'pensum' => 'Customers',
				'video' => '201)yii2customer.mp4',
				'id_course' => 4								
			],
			[				
				'pensum' => 'CRUD Customers',
				'video' => '202)yii2crud.mp4',
				'id_course' => 4								
			],
			[				
				'pensum' => 'Instalar',
				'video' => '1)newlaracomposer.mp4',
				'id_course' => 5								
			],
			[				
				'pensum' => 'Estructura',
				'video' => '2)newlaraestructura.mp4',
				'id_course' => 5								
			],
			[				
				'pensum' => 'Controladores',
				'video' => '3)newlaracontroller.mp4',
				'id_course' => 5								
			],
			[				
				'pensum' => 'Database',
				'video' => '4)newlaradb.mp4',
				'id_course' => 5								
			],
			[				
				'pensum' => 'Eloquent',
				'video' => '5)newlaraeloquent.mp4',
				'id_course' => 5								
			],
			[				
				'pensum' => 'Parametros',
				'video' => '6)newlaraparams.mp4',
				'id_course' => 5								
			],
			[				
				'pensum' => 'Joins',
				'video' => '7)newlarajoins.mp4',
				'id_course' => 5								
			],
			[				
				'pensum' => 'Migraciones',
				'video' => '8)newlaramigrations.mp4',
				'id_course' => 5								
			],
			[				
				'pensum' => 'Factory',
				'video' => '9)newlarafactory.mp4',
				'id_course' => 5								
			],
			[				
				'pensum' => 'Logs',
				'video' => '10)newlaralogs.mp4',
				'id_course' => 5								
			],
			[				
				'pensum' => 'Headers',
				'video' => '11)newlaraheaders.mp4',
				'id_course' => 5								
			],
			[				
				'pensum' => 'Querys Eloquent',
				'video' => '12)newartisanquerys.mp4',
				'id_course' => 5								
			],
			[				
				'pensum' => 'Relaciones de Tablas',
				'video' => '13)newlararelation.mp4',
				'id_course' => 5								
			],
			[				
				'pensum' => 'Widget Parte 1',
				'video' => '14)newlarawidget1.mp4',
				'id_course' => 5								
			],
			[				
				'pensum' => 'Widget Parte 2',
				'video' => '15)newlarawidgets2.mp4',
				'id_course' => 5								
			],
			[				
				'pensum' => 'Widget Parte 3',
				'video' => '16)newlarawidgets3.mp4',
				'id_course' => 5								
			],
			[				
				'pensum' => 'Instalar',
				'video' => '1)cakeinstalarnew.mp4',
				'id_course' => 6								
			],
			[				
				'pensum' => 'Database',
				'video' => '2)cakedatabasenew.mp4',
				'id_course' => 6								
			],
			[				
				'pensum' => 'Migraciones Parte 1',
				'video' => '3)cakemigrationnew.mp4',
				'id_course' => 6								
			],
			[				
				'pensum' => 'Migraciones Parte 2',
				'video' => '4)cakemigrations2new.mp4',
				'id_course' => 6								
			],
			[				
				'pensum' => 'Semillas',
				'video' => '5)cakeseedsnew.mp4',
				'id_course' => 6								
			],
			[				
				'pensum' => 'CRUD',
				'video' => '6)cakecrudnew.mp4',
				'id_course' => 6								
			],
			[				
				'pensum' => 'Data de Prueba',
				'video' => '7)caketestnew.mp4',
				'id_course' => 6								
			],
			[				
				'pensum' => 'Autenticacion Parte 1',
				'video' => '8)cakeauth1new.mp4',
				'id_course' => 6								
			],
			[				
				'pensum' => 'Autenticacion Parte 2',
				'video' => '9)cakeauth2new.mp4',
				'id_course' => 6								
			],
			[				
				'pensum' => 'Autenticacion Parte 3',
				'video' => '10)auth3new.mp4',
				'id_course' => 6								
			],
			[				
				'pensum' => 'Rutas Parte 1',
				'video' => '11)routes1new.mp4',
				'id_course' => 6								
			],
			[				
				'pensum' => 'Rutas Parte 2',
				'video' => '12)routes2new.mp4',
				'id_course' => 6								
			],
			[				
				'pensum' => 'Mapas con Leaflet',
				'video' => '13)mapnew.mp4',
				'id_course' => 6								
			],
			[				
				'pensum' => 'Logearse',
				'video' => '14)cakelogoutnew.mp4',
				'id_course' => 6								
			],
			[				
				'pensum' => 'Semillas con Entidades',
				'video' => '15)cakeauthseednew.mp4',
				'id_course' => 6								
			],													
		];

		$this->db->table('pensums')->insertBatch($data);
	}
}
