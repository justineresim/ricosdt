<?php
/*
Plugin Name: Hours of Operation Widget
Description: Displays your hours of operation
Author: Justine Lileikis
Version: 1.0
*/
// Block direct requests
if ( !defined('ABSPATH') )
	die('-1');
	
	
add_action( 'widgets_init', function(){
     register_widget( 'My_Widget' );
});	
/**
 * Adds My_Widget widget.
 */
class My_Widget extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Hours_Widget', // Base ID
			__('Hours of Operation Widget', 'text_domain'), // Name
			array( 'description' => __( 'Displays hours of operation', 'text_domain' ), ) // Args
		);
	}
	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {

		date_default_timezone_set('Canada/Eastern');
		$day = date("l");
	
     	echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
		}

		echo '<div class="widget-content ' . $day . '">';
		
		if ( ! empty( $instance['mon'] ) ) {
			echo '<div class="mon">';
			echo '<div class="day-label">Monday:</div>';
			echo '<div class="day-hours">';
			echo $args['before_mon'] . apply_filters( 'widget_mon', $instance['mon'] ). $args['after_mon'];
			echo '</div>';
			echo '</div>';
		}
		if ( ! empty( $instance['tues'] ) ) {
			echo '<div class="tues">';
			echo '<div class="day-label">Tuesday:</div>';
			echo '<div class="day-hours">';
			echo $args['before_tues'] . apply_filters( 'widget_tues', $instance['tues'] ). $args['after_tues'];
			echo '</div>';
			echo '</div>';
		}
		if ( ! empty( $instance['wed'] ) ) {
			echo '<div class="wed">';
			echo '<div class="day-label">Wednesday:</div>';
			echo '<div class="day-hours">';
			echo $args['before_wed'] . apply_filters( 'widget_wed', $instance['wed'] ). $args['after_wed'];
			echo '</div>';
			echo '</div>';
		}
		if ( ! empty( $instance['thurs'] ) ) {
			echo '<div class="thurs">';
			echo '<div class="day-label">Thursday:</div>';
			echo '<div class="day-hours">';
			echo $args['before_thurs'] . apply_filters( 'widget_thurs', $instance['thurs'] ). $args['after_thurs'];
			echo '</div>';
			echo '</div>';
		}
		if ( ! empty( $instance['fri'] ) ) {
			echo '<div class="fri">';
			echo '<div class="day-label">Friday:</div>';
			echo '<div class="day-hours">';
			echo $args['before_fri'] . apply_filters( 'widget_fri', $instance['fri'] ). $args['after_fri'];
			echo '</div>';
			echo '</div>';
		}
		if ( ! empty( $instance['sat'] ) ) {
			echo '<div class="sat">';
			echo '<div class="day-label">Saturday:</div>';
			echo '<div class="day-hours">';
			echo $args['before_sat'] . apply_filters( 'widget_sat', $instance['sat'] ). $args['after_sat'];
			echo '</div>';
			echo '</div>';
		}
		if ( ! empty( $instance['sun'] ) ) {
			echo '<div class="sun">';
			echo '<div>';
			echo '<div class="day-label">Sunday:</div>';
			echo '<div class="day-hours">';
			echo $args['before_sun'] . apply_filters( 'widget_sun', $instance['sun'] ). $args['after_sun'];
			echo '</div>';
			echo '</div>';
		}

		echo '</div></div>';

		echo $args['after_widget'];
	}
	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title', 'text_domain' );
		}

		if ( isset( $instance[ 'mon' ] ) ) {
			$mon = $instance[ 'mon' ];
		}
		if ( isset( $instance[ 'tues' ] ) ) {
			$tues = $instance[ 'tues' ];
		}
		if ( isset( $instance[ 'wed' ] ) ) {
			$wed = $instance[ 'wed' ];
		}
		if ( isset( $instance[ 'thurs' ] ) ) {
			$thurs = $instance[ 'thurs' ];
		}
		if ( isset( $instance[ 'fri' ] ) ) {
			$fri = $instance[ 'fri' ];
		}
		if ( isset( $instance[ 'sat' ] ) ) {
			$sat = $instance[ 'sat' ];
		}
		if ( isset( $instance[ 'sun' ] ) ) {
			$sun = $instance[ 'sun' ];
		}
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<br>
		<p>
			<label for="<?php echo $this->get_field_id( 'mon' ); ?>"><?php _e( 'Monday:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'mon' ); ?>" name="<?php echo $this->get_field_name( 'mon' ); ?>" type="text" value="<?php echo esc_attr( $mon ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'tues' ); ?>"><?php _e( 'Tuesday:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'tues' ); ?>" name="<?php echo $this->get_field_name( 'tues' ); ?>" type="text" value="<?php echo esc_attr( $tues ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'wed' ); ?>"><?php _e( 'Wednesday:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'wed' ); ?>" name="<?php echo $this->get_field_name( 'wed' ); ?>" type="text" value="<?php echo esc_attr( $wed ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'thurs' ); ?>"><?php _e( 'Thursday:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'thurs' ); ?>" name="<?php echo $this->get_field_name( 'thurs' ); ?>" type="text" value="<?php echo esc_attr( $thurs ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'fri' ); ?>"><?php _e( 'Friday:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'fri' ); ?>" name="<?php echo $this->get_field_name( 'fri' ); ?>" type="text" value="<?php echo esc_attr( $fri ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'sat' ); ?>"><?php _e( 'Saturday:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'sat' ); ?>" name="<?php echo $this->get_field_name( 'sat' ); ?>" type="text" value="<?php echo esc_attr( $sat ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'sun' ); ?>"><?php _e( 'Sunday:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'sun' ); ?>" name="<?php echo $this->get_field_name( 'sun' ); ?>" type="text" value="<?php echo esc_attr( $sun ); ?>">
		</p>
		<?php 
	}
	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['mon'] = ( ! empty( $new_instance['mon'] ) ) ? strip_tags( $new_instance['mon'] ) : '';
		$instance['tues'] = ( ! empty( $new_instance['tues'] ) ) ? strip_tags( $new_instance['tues'] ) : '';
		$instance['wed'] = ( ! empty( $new_instance['wed'] ) ) ? strip_tags( $new_instance['wed'] ) : '';
		$instance['thurs'] = ( ! empty( $new_instance['thurs'] ) ) ? strip_tags( $new_instance['thurs'] ) : '';
		$instance['fri'] = ( ! empty( $new_instance['fri'] ) ) ? strip_tags( $new_instance['fri'] ) : '';
		$instance['sat'] = ( ! empty( $new_instance['sat'] ) ) ? strip_tags( $new_instance['sat'] ) : '';
		$instance['sun'] = ( ! empty( $new_instance['sun'] ) ) ? strip_tags( $new_instance['sun'] ) : '';
		return $instance;
	}
} // class My_Widget