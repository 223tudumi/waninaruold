<h2>ユーザ新規登録入力画面</h2>
<?php
echo $this->Form->create('User');
echo $this->Form->input('student_number');
echo $this->Form->input('real_name');
echo $this->Form->input('user_name');
echo $this->Form->input('user_password');
echo $this->Form->end('Save User');
?>