<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tenant Listing</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-lg">
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-3xl font-bold text-gray-800">🏢 Tenant Listing</h1>
      <a href="{{ route('admin.tenants.add') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
        + Add Tenant
      </a>
    </div>

    <div class="flex flex-col md:flex-row gap-4 mb-6">
      <input type="text" placeholder="🔍 Search by name..."
        class="w-full md:w-1/3 p-3 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"/>

      <select class="w-full md:w-1/4 p-3 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
        <option value="">All Statuses</option>
        <option value="Active">✅ Active</option>
        <option value="Inactive">❌ Inactive</option>
      </select>
    </div>

    <div class="overflow-x-auto">
      <table class="min-w-full bg-white border rounded shadow-sm">
        <thead class="bg-gray-100 text-gray-600 uppercase text-sm">
          <tr>
            <th class="p-3 text-left">Name</th>
            <th class="p-3 text-left">Email</th>
            <th class="p-3 text-left">Status</th>
            <th class="p-3 text-left">Apartment</th>
            <th class="p-3 text-right">Actions</th>
          </tr>
        </thead>
        <tbody class="divide-y text-gray-700">
          <tr class="hover:bg-gray-50">
            <td class="p-3 font-medium">John Doe</td>
            <td class="p-3">john@example.com</td>
            <td class="p-3">
              <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full">Active</span>
            </td>
            <td class="p-3">A101</td>
            <td class="p-3 text-right space-x-2">
              <button class="text-blue-600 hover:underline">Edit</button>
              <button class="text-red-600 hover:underline">Delete</button>
            </td>
          </tr>
          <tr class="hover:bg-gray-50">
            <td class="p-3 font-medium">Jane Smith</td>
            <td class="p-3">jane@example.com</td>
            <td class="p-3">
              <span class="bg-red-100 text-red-700 text-xs px-2 py-1 rounded-full">Inactive</span>
            </td>
            <td class="p-3">B203</td>
            <td class="p-3 text-right space-x-2">
              <button class="text-blue-600 hover:underline">Edit</button>
              <button class="text-red-600 hover:underline">Delete</button>
            </td>
          </tr>
          <tr class="hover:bg-gray-50">
            <td class="p-3 font-medium">Alice Johnson</td>
            <td class="p-3">alice@example.com</td>
            <td class="p-3">
              <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full">Active</span>
            </td>
            <td class="p-3">C310</td>
            <td class="p-3 text-right space-x-2">
              <button class="text-blue-600 hover:underline">Edit</button>
              <button class="text-red-600 hover:underline">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
