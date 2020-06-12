@extends('layouts.app')

@section('content')
	<div class="container mx-auto my-10 w-500 shadow-2xl rounded-lg">
		<div class="container py-6 px-4 mb-5 flex bg-white rounded-t-lg">
			<div class="flex-1">Internia</div>
			<div class="flex-1">
				<div class="flex">
					<div class="flex-1">Calendar</div>
					<div class="flex-1">Statistic</div>
					<div class="flex-1">Employee</div>
					<div class="flex-1">Client</div>
					<div class="flex-1">Equipment</div>
				</div>
			</div>
			<div class="flex-1">Profile</div>
		</div>

		<div class="container flex bg-gray-300 rounded-b-lg">
			<div class="flex-1 px-5">
				<h2 class="py-5">employee</h2>
				<div class="flex flex-col bg-white px-5 shadow-2xl rounded-lg">
					<h3>All Employees</h3>

					<h5>PROJECT</h5>

					<div class="flex-1 rounded-md">Arena Sport</div>
					<div class="flex-1 rounded-md">Arena Sport</div>
					<div class="flex-1 rounded-md">Arena Sport</div>
					<div class="flex-1 rounded-md">Arena Sport</div>
					<div class="flex-1 rounded-md">Arena Sport</div>
					<div class="flex-1 rounded-md">Arena Sport</div>

					<div class="br-5 p-5 bg-purple-500 color-accent rounded-full">add project</div>
				</div>
			</div>
			<div class="flex-1 px-5">
				<h2 class="py-5">add employee</h2>
				<div class="flex flex-col pb-5">
					<div class="flex-1 pb-3">
						<div class="flex">
							<div class="flex-1"></div>
							<div class="flex-1">EMPLOYEE</div>
							<div class="flex-1">SALARY</div>
							<div class="flex-1">STATUS</div>
							<div class="flex-1">MANAGE</div>
						</div>
					</div>
					<div class="flex-1 bg-white pb-3 shadow-2xl rounded">Employee Details</div>
					<div class="flex-1 bg-white pb-3 shadow-2xl rounded">Employee Details</div>
				</div>
			</div>
		</div>
	</div>
@endsection