@php
	// preserve backwards compatibility with Widgets in Backpack 4.0
	if (isset($widget['wrapperClass'])) {
		$widget['wrapper']['class'] = $widget['wrapperClass'];
	}
@endphp

@includeWhen(!empty($widget['wrapper']), backpack_view('widgets.inc.wrapper_start'))
	<script>
        window.location.href = '/admin/dashboard/index'
    </script>
@includeWhen(!empty($widget['wrapper']), backpack_view('widgets.inc.wrapper_end'))
