<div align="center">
<br>
<table style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; width: 780px; border: 10px solid #488E48;" border="0" cellspacing="0" cellpadding="10" align="center" bgcolor="#FFFFFF">
  <tbody>
    <tr>
      <td style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 24px; color: #fff;" bgcolor="488E48">The Pharmacy and Poisons Board</td>
    </tr>
    <tr>
      <td><p><strong><a name="1"></a>Suspected Adverse Drug Follow up Report</strong></p>
        <p>Thank you for your participation in the pharmacovigilance process.
		 We are sending this email to request for more information on a report you submitted to us.</p>
        <p>The UNIQUE Identification Number of the Report is <strong><?php echo $sadrsFollowup['SadrFollowup']['id']; ?></strong></p>
		<p>To edit the report, click on the following link.</p>
		<p><a href="<?php echo $root;?>sadr_followups/edit/<?php echo $sadrsFollowup['SadrFollowup']['id'];?>" target="_blank" > <?php echo $root;?>sadr_followups/edit/<?php echo $sadrsFollowup['SadrFollowup']['id'];?> </a></p><br/>
		
	  </td>
    </tr>
  </tbody>
</table>
</div>