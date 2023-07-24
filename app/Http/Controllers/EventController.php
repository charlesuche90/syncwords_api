<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Event; // Assuming you have an Event model

class EventController extends Controller
{
    // List events for a specific organization
    public function index()
    {
        // Assuming you have an authenticated user with a valid Bearer token
        // Get the organization ID from the authenticated user (replace 1 with your actual organization ID retrieval logic)
        $organizationId = 1;

        // Get the list of events for the specific organization
        $events = Event::where('organization_id', $organizationId)->get();

        // Return the list of events as a JSON response
        return response()->json($events, 200);
    }

    // Create a new event
    public function store(Request $request)
    {
        // Define validation rules
        $rules = [
            'event_title' => 'required|max:200',
            'event_start_date' => 'required|date_format:Y-m-d H:i:s',
            'event_end_date' => 'required|date_format:Y-m-d H:i:s|after:event_start_date|before_or_equal:' . date('Y-m-d H:i:s', strtotime('+12 hours')),
            'organization_id' => 'required|exists:authorization,id',
        ];

        // Define custom error messages
        $customMessages = [
            // ... (custom error messages as before) ...
        ];

        // Validate the request data with custom error messages
        $validator = Validator::make($request->all(), $rules, $customMessages);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // If validation passes, create the event
        // ... (create the event) ...

        return response()->json(['message' => 'Event created successfully'], 201);
    }

    // Update an existing event
    public function update(Request $request, $id)
    {
        // Assuming you have an existing event with the given ID in the database
        $event = Event::find($id);

        // If the event does not exist, return a 404 Not Found response
        if (!$event) {
            return response()->json(['error' => 'Event not found'], 404);
        }

        // Define validation rules for updating an event (similar to the store method)
        // ... (validation rules for updating) ...

        // Validate the request data with custom error messages
        // ... (validation and error handling as before) ...

        // If validation passes, update the event with the new data
        // ... (update the event) ...

        return response()->json(['message' => 'Event updated successfully'], 200);
    }

    // ... Other methods ...
}
