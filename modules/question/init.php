<?
  Route::set('UserQuestion', 'user_question/get_questions(/<duration_cat>(/<catID>(/<orderBY>)))')
    ->defaults(array(
        'controller' => 'question',         //cabinet.loyalty.name
        'action' => 'get_questions',
    )
  );

  Route::set('UserGetCats', 'user_question/get_cats(/<catID>(/<userID>))', array('catID' => '[0-9]+'), array('userID' => '[0-9]+'))
    ->defaults(array(
        'controller' => 'question',         //cabinet.loyalty.name
        'action' => 'get_cats',
    )
  );

  Route::set('ModuleQuestionLeftQuestionsBest', 'user_question/get_left_questions_best')
    ->defaults(array(
        'controller' => 'question',         //cabinet.loyalty.name
        'action' => 'get_left_questions_best',
    )
  );

  Route::set('UserGetQuestionsAsk', 'module_question/ask')
    ->defaults(array(
        'controller' => 'question',
        'action'     => 'ask',
    )
  );

  Route::set('ModuleQuestionGetUserQuestions', 'module_question/get_user_questions/<userID>(/<catID>)', array('userID' => '[0-9]+'), array('catID' => '[0-9]+'))
    ->defaults(array(
        'controller' => 'question',
        'action'     => 'get_user_questions'
    )
  );
  
  Route::set('ModuleQuestion', 'module_question/question_<qid>', array('qid' => '[0-9]+'))
    ->defaults(array(
        'controller' => 'question',
        'action'     => 'show'
    )
  );

/**************************************** набор ajax запросов к модулю *****************************************/
Route::set('UserGetQuestionsAjax', 'user_question/get_questions_ajax')
    ->defaults(array(
        'controller' => 'question',
        'action'     => 'get_questions_ajax',
      )
);


Route::set('UserGetAnswersAjax', 'user_question/get_answers_ajax')
    ->defaults(array(
        'controller' => 'question',
        'action'     => 'get_answers_ajax',
      )
);


Route::set('QuestionDoLikeAjax', 'module_question/do_like_ajax')
    ->defaults(array(
        'controller' => 'question',
        'action'     => 'do_like_ajax',
      )
);

Route::set('QuestionDoAnswNoAjax', 'module_question/do_answ_no_ajax')
    ->defaults(array(
        'controller' => 'question',
        'action'     => 'do_answ_no',
      )
);

Route::set('QuestionDoAnswYesAjax', 'module_question/do_answ_yes_ajax')
    ->defaults(array(
        'controller' => 'question',
        'action'     => 'do_answ_yes',
      )
);

?>