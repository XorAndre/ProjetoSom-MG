<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Network\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['home']);
    }

    public function adminHome(){
        $accesses = TableRegistry::get('Accesses');
        $query = $accesses->find()
        ->select(['data'])
        ->group(['DATE_FORMAT(data, "%Y-%m-%d")']);
        $query->select(['count' => $query->func()->count('*')]);
        $query->select(['DATE_FORMAT' => $query->func()->count('*')]);
        $results = $query->all();
        foreach ($results as $key => $value) {
            $json[] = ["#!!Date.UTC(".date_format($value->data, 'Y').",".date_format($value->data, 'm').",".date_format($value->data, 'd'). ")!!#",$value->count];
        }
        $string = json_encode($json);
        $string = str_replace('"#!!','',$string);
        $string = str_replace('!!#"','',$string);
        $this->set("data", $string);
    }

    public function home()
    {
        $this->viewBuilder()->setLayout('site');
        $news = TableRegistry::get('News');
        $queryNews = $news->find()
            ->order(['data' => 'desc'])
            ->limit('10');
        $resultNew = $queryNews->all();
        $resultnewFinal = [];
        foreach ($resultNew as $key => $value) {
            $resultnewFinal[] = $value;
            $resultnewFinal[$key]['Image'] = $news->Images->preparePath($value['image_id']);
        }        
        $this->set('resultNew',$resultNew);


        $gallery = TableRegistry::get('Galleries');
        $queryGallerys = $gallery->find()
            ->order(['data' => 'desc'])
            ->limit('10');
        $resultGallery = $queryGallerys->all();
        $resultadoGaleria = [];
        foreach ($resultGallery as $key => $value) {
            $resultadoGaleria[] = $value;
            $resultadoGaleria[$key]['Image'] = $gallery->Images->preparePath($value['image_id']);
        }
        $this->set('resultadoGaleria',$resultadoGaleria);

        $focuses = TableRegistry::get('Focuses');
        $queryFocuses = $focuses->find()
            ->order(['data' => 'desc'])
            ->limit('10');
        $queryFocuses = $queryFocuses->all();
        $resultadoFocuses = [];
        foreach ($queryFocuses as $key => $value) {
            $resultadoFocuses[] = $value;
            $resultadoFocuses[$key]['Image'] = $focuses->Images->preparePath($value['image_id']);
        }

        $this->set('resultadoFocuses', $resultadoFocuses);
        $places = TableRegistry::get('Places');
        $queryPlaces = $places->find()
            ->contain(['Banners']);
        $queryPlaces = $queryPlaces->all();
        foreach ($queryPlaces as $keyPlace => $valuePlace) {
            $auxarr = [];
            foreach ($valuePlace['banners'] as $key => $value) {
                $aux = substr($value['path'], 12);
                $aux = str_replace('\\', '/', $aux);
                $auxarr[] = ($aux."thumbnail".$valuePlace['name']."-".$value['name']);
            }
            $this->set('publicidade'.$valuePlace['name'], $auxarr);
        }       
    }
}
