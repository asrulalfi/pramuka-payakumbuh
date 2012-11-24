<h1>Login Form</h1>
<div>
  <?php echo $this->Session->flash(); ?>
  <?php echo $this->Form->create('User'); ?>
    <table border="0" width="100">
    <tr>
      <td>
        <?php echo $this->Form->input('username'); ?>
      </td>
    </tr>
    <tr>
      <td>
        <?php echo $this->Form->input('password'); ?>
      </td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" value="login" class="login-admin" /></td> 
    </tr>
    </table>  
  <?php echo $this->Form->end(); ?>
</div>