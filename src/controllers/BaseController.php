<?php
namespace Tech5s\Master\Controller;
use Illuminate\Routing\Controller;
class BaseController extends Controller
{
	protected function _name(){
		echo "Hello, Vth";
	}
}