<div class="portlet-body">
                                    <div class="table-scrollable">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th> 序号 </th>
                                                    <th> 姓名</th>
                                                    <th> 性别 </th>
                                                    <th> 所在班级 </th>
                                                    <th> 监护人</th>
                                                    <th>监护人手机</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
<?php
	foreach($data as $dd){
		echo '<tr><td>'.$dd['A'].'</td><td>'.$dd['B'].'</td><td>'.$dd['C'].'</td><td>'.$dd['D'].'</td><td>'.$dd['E'].'</td><td>'.$dd['F'].'</td></tr>';
}
?>
                                                
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

