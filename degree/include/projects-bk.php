<div class="card card-warning2">
					<div class="card-header card-page-warning">
						<h4 class="title">INTERNSHIPS</h4>
					</div>
					<div class="card-body p-2">
						<table class="table table-stripped table-hover table-sm" style="font-size:13px" id="{{coursefolder}}">
							<thead>
							  <tr>
								<th>{{headers.SN}}</th>
								<th>{{headers.SUC}}</th>
								<th>{{headers.Programme}}</th>
								<th>{{headers.ProCode}}</th>
								<th>{{headers.Student}}</th>
								<th>{{headers.Project}}</th>
								<th>{{headers.Document}}</th>
							  </tr>
							</thead>
							<tbody>
							 <tr ng-repeat="x in studentlist">
								<td>{{$index+1}}</td>
								<td>{{x.SUC}}</td>
								<td>{{x.Programme}}</td>
								<td>{{x.ProgramCode}}</td>
								<td>{{x.Student}}</td>
								<td>{{x.ProjectName}}</td>
								<td><a href="projects/2022-23/{{coursefolder}}/{{x.SUC}}.pdf" class="btn btn-info btn-sm" target="_blank">VIEW</a></td>
							  </tr>
							</tbody>  
						</table>
					</div>	
			</div>