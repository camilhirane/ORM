<?php
use App\Employee; 
use App\Department; 
use App\Title; 
use App\Salary; 

public class Tp1 {

	/**
	 * Trouver les employées de sexe féminin classés par emp_no, limité aux 10 premiers résultats
	 */ 
	public function rqt1() {
        return;
         App\Employee::all()->where('gender','=','F')->Sortby('empt_no')->take(10);

	}
	
	/**
	 * Trouver tous les employés dont le prénom est 'Troy'.
	 */
	public function rqt2(
        //SELECT FROM employees WHERE firstame = Troy; 
        App\Employee::all()->where('first_name','=','Troy')->get();
	}
	
	/**
	 * 
	 * Trouver tous les employés de sexe masculin nés après le 31 janvier 1965 
	 * 
	 * */
	public function rqt3() {
        return App\Employee::where('gender', 'M')->where('birth_date', '>', '1965-01-31')->get();
        
	
	/**
	 * 
	 * Combien y a t'il de départements 
	 * 
	 * */
	public function rqt4() {
        return null; 
        App\Department::all()->count(); 
	}
	
	/**
	 * 
	 *  Combien de personnes dont le prénom est 'Richard' sont des femmes
	 * 
	 * */
	public function rqt5() {
		return App\Employee::where('gender', 'F')->where('first_name', 'Richard')->get();
	}
	
		
	/**
	 * 
	 * Combien y a t'il de titre différents d'employés 
	 * 
	 * */
	public function rqt6() {
        return Title::distinct('title')->count(); 
        
	}
	
	
	/**
	 * 
	 * Le salaire moyen de l'employé numéro 287323 toute période confondu 
	 * 
	 * */
	public function rqt7() {
		return App\Salary::where('emp_no','=','287323')->where('salary','=','from_date')->get();
    }
    
	
	
	/**
	 * 
	 * Quel était le titre de Danny Rando le 12 janvier 1990 
	 * 
	 * */
	public function rqt8() {
		{
			return $query->where([['from_date', '<', '1990-01-12'], ['to_date', '>', 1990-01-12]]); 
	
		  }])
		  ->where([['first_name', 'Danny'], ['last_name', 'Rando']])->get()
		  }
	} 
	
	/**
	 * 
	 * L'employé qui a eu le salaire maximum de tous les temps, et quel est le montant de ce salaire
	 * 
	 * */
	 public function rqt9() {
		 return Salary::orderBy('salary','desc')->join('employees as e','e.emp_no', '=','salaries.emp_no')->first();
	 }
	 
	 /**
	  * 
	  * Combien d'employés travaillaient dans le département 'Sales' le 1er Janvier 2000
	  * 
	  */
	  public function rqt10() {
		  return Department::where('dept_name','sales')->join('dept_emp as de','departements.dept_no','=','de.dept_no')->where([['where_date', '<=','2000-01-01']])
	  } 
	  
	  /**
	   * Qui est le manager de Martine Hambrick actuellement et quel est son titre
	   */  
	  public function rqt11()
}
