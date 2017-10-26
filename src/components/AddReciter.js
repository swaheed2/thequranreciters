import React, { Component } from 'react';
import { Field, FieldArray, reduxForm, formValueSelector } from "redux-form"
import { teal } from 'material-ui/colors';
import Button from 'material-ui/Button'

class AddReciter extends Component {
	constructor(props) {
		super(props)
		this.submitReciter = this.submitReciter.bind(this)
	}
	submitReciter(values) {
		this.props.uploadReciter(values)
	}
	render() {
		const { handleSubmit, pristine, reset, submitting } = this.props

		return (
			<div className="addReciter" style={{ width: '100%', marginTop: '-14px' }}>

				<div style={{ backgroundColor: teal[800], minHeight: '100px', display: 'flex', justifyContent: 'center' }}>
					<div style={{ margin: 'auto 0' }}>
						<h3 style={{ color: 'white' }}>Add a Reciter</h3>
					</div>
				</div>
				<div style={{ backgroundColor: teal[300] }}>
					<form onSubmit={handleSubmit(this.submitReciter)} style={{ marginLeft: '11px', paddingTop: '11px' }}>
						<div style={{ display: 'flex', marginBottom: '11px' }}>
							<div style={{ width: '130px' }}><label style={{ color: 'white', marginRight: '11px' }}>Id</label></div>
							<div>
								<Field
									name="id"
									component="input"
									type="text"
									placeholder="Id"

								/>
							</div>
						</div>
						<div style={{ display: 'flex', marginBottom: '11px' }}>
							<div style={{ width: '130px' }}><label style={{ color: 'white', marginRight: '11px' }}>Name</label></div>
							<div>
								<Field
									name="name"
									component="input"
									type="text"
									placeholder="Name"
								/>
							</div>
						</div>
						<div style={{ display: 'flex', marginBottom: '11px' }}>
							<div style={{ width: '130px' }}><label style={{ color: 'white', marginRight: '11px' }}>Full Name</label></div>
							<div>
								<Field
									name="fullName"
									component="input"
									type="text"
									placeholder="Full Name"
								/>
							</div>
						</div>
						<div style={{ display: 'flex', marginBottom: '11px' }}>
							<div style={{ width: '130px' }}> <label style={{ color: 'white', marginRight: '11px' }}>Arabic Name</label></div>
							<div>
								<Field
									name="arabicName"
									component="input"
									type="text"
									placeholder="Arabic Name"
								/>
							</div>
						</div>
						<div style={{ display: 'flex', marginBottom: '11px' }}>
							<div style={{ width: '130px' }}><label style={{ color: 'white', marginRight: '11px' }}>Album Identifier</label></div>
							<div>
								<Field
									name="albumIdentifier"
									component="input"
									type="text"
									placeholder="Album Identifier"
								/>
							</div>
						</div>
						<div style={{ display: 'flex', marginBottom: '11px' }}>
							<div style={{ width: '130px' }}><label style={{ color: 'white', marginRight: '11px' }}>Page Id</label></div>
							<div>
								<Field
									name="pageId"
									component="input"
									type="text"
									placeholder="Page Id"
								/>
							</div>
						</div>
						<div style={{ display: 'flex', marginBottom: '11px' }}>
							<div style={{ width: '130px' }}><label style={{ color: 'white', marginRight: '11px' }}>Image Url</label></div>
							<div>
								<Field
									name="imageUrl"
									component="input"
									type="text"
									placeholder="Image URL"
								/>
							</div>
						</div>

						<div style={{ marginTop: '24px', paddingBottom: '12px' }}>
							<Button style={{ marginLeft: '11px' }} color="primary" raised type="submit" disabled={pristine || submitting}>
								Submit
	        			</Button>
							<Button style={{ marginLeft: '11px' }} onClick={reset} color="accent" raised disabled={pristine || submitting}>
								Clear Values
	        			</Button>


						</div>
					</form>
				</div>

			</div>
		)
	}
}

export default AddReciter