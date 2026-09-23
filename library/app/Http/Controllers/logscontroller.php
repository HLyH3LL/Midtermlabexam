<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logscontroller extends Controller
{
public function index()
{
$logs=librarylogs::latest()->paginate(10);
return response()->json($logs);
}
// CREATE
public function store(Request $request)
{
$validated = $request->validate([
'name' => 'required|string|max:100',
'studentnumber' => 'required|string|max:20',
'book' => 'required|string|max:100',
'date' => 'required|date',
'returndate' => 'nullable|date',
'status' => 'required|in:Returned,Not Returned'
]);
$logs = librarylogs::create($validated);
return response()->json([
'message' => 'Log created successfully.',
'logs' => $logs
], 201);
}
// READ SINGLE RECORD
public function show(librarylogs $logs)
{
return response()->json($logs);
}
// UPDATE
public function update(Request $request, librarylogs $logs)
{
$validated = $request->validate([
'name' => 'required|string|max:100',
'studentnumber' => 'required|string|max:20',
'book' => 'required|string|max:100',
'date' => 'required|date',
'returndate' => 'nullable|date',
'status' => 'required|in:Returned,Not Returned'
]);
$logs->update($validated);
return response()->json([
'message' => 'Log updated successfully.',
'logs' => $logs
]);
}
// DELETE
public function destroy(librarylogs $logs)
{
$logs->delete();
return response()->json([
'message' => 'Log deleted successfully.'
]);
}
}
